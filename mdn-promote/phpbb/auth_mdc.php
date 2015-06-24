<?php
/* ***** BEGIN LICENSE BLOCK *****
 * Version: MPL 1.1/GPL 2.0/LGPL 2.1
 *
 * The contents of this file are subject to the Mozilla Public License Version
 * 1.1 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * The Original Code is addons.mozilla.org site.
 *
 * The Initial Developer of the Original Code is
 * The Mozilla Foundation.
 * Portions created by the Initial Developer are Copyright (C) 2009
 * the Initial Developer. All Rights Reserved.
 *
 * Contributor(s):
 *   Wil Clouser <wclouser@mozilla.com> (Original Author)
 *   Fred Wenzel <fwenzel@mozilla.com>
 *
 * Alternatively, the contents of this file may be used under the terms of
 * either the GNU General Public License Version 2 or later (the "GPL"), or
 * the GNU Lesser General Public License Version 2.1 or later (the "LGPL"),
 * in which case the provisions of the GPL or the LGPL are applicable instead
 * of those above. If you wish to allow use of your version of this file only
 * under the terms of either the GPL or the LGPL, and not to allow others to
 * use your version of this file under the terms of the MPL, indicate your
 * decision by deleting the provisions above and replace them with the notice
 * and other provisions required by the GPL or the LGPL. If you do not delete
 * the provisions above, a recipient may use your version of this file under
 * the terms of any one of the MPL, the GPL or the LGPL.
 *
 * ***** END LICENSE BLOCK ***** */ 

/**
 * MDC Auth plug-in for phpBB3; based on db
 *
 * @package login
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB')) {
	exit;
}

/**
* Init function.  Just tries to connect to the db with supplied credentials.
*/
function init_mdc() {
    global $user;

    $mdcdb = _auth_mdc_connect_database();

    if ($mdcdb->connect_error) {
        return $user->lang['ERR_CONNECTING_SERVER'].' '.$mdcdb->connect_error;

    }
    $mdcdb->close();
}

/**
* Login function
*/
function login_mdc(&$username, &$password) {

    // apparently phpbb doesn't believe in include_once
    if (!function_exists('user_add')) {
        global $phpbb_root_path, $phpEx;
        include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
    }

    // This is fallback because I locked myself out of the database a lot when writing this.  In theory we can whack this, but if the MDC db dies or
    // something like that, we will be locked out of the forum system completely.  Seems unlikely, but if it happens it would probably be nice
    // to have this.
    if ($username == 'admin') {
        include_once 'auth_db.php';
        return login_db($username, $password);
    }

    global $db, $user;

    $anonymous_user = array('user_id' => ANONYMOUS);
    $mdcuser = array();

	// do not allow empty password
	if (!$password) {
		return array(
			'status'	=> LOGIN_ERROR_PASSWORD,
			'error_msg'	=> 'NO_PASSWORD_SUPPLIED',
            'user_row'	=> $anonymous_user
		);
	}

	if (!$username) {
		return array(
			'status'	=> LOGIN_ERROR_USERNAME,
			'error_msg'	=> 'LOGIN_ERROR_USERNAME',
            'user_row'	=> $anonymous_user
		);
	}

    $mdcdb = _auth_mdc_connect_database();

    if (is_string($mdcdb)) {
		return array(
			'status'     => LOGIN_ERROR_EXTERNAL_AUTH,
			'error_msg'  => 'GENERAL_ERROR'.' '.$mdcdb,
            'user_row'	 => $anonymous_user
		);
    }


    $_sql = 'SELECT user_id, user_email, user_password, user_name, user_active, user_role_id FROM users WHERE user_name=?';

    if ($_stmt = $mdcdb->prepare($_sql)) {
        $_stmt->bind_param('s', $username);
        $_stmt->execute();
        $_stmt->bind_result($mdcuser['id'], $mdcuser['email'], $mdcuser['password'], $mdcuser['username'], $mdcuser['active'], $mdcuser['user_role_id']);
        $_stmt->fetch();
        $_stmt->close();
    }
    $mdcdb->close();

    // increase MDC user ID by 100 to jump over phpBB's default users.
    $mdcuser['mdcid'] = $mdcuser['id'];
    $mdcuser['id'] += 100;

    if ($mdcuser['id'] == 0) {
        return array(
            'status'	=> LOGIN_ERROR_USERNAME,
            'error_msg'	=> 'LOGIN_ERROR_USERNAME',
            'user_row'	=> $anonymous_user
        );
    }
    if (!$mdcuser['active']) {
        return array(
            'status'		=> LOGIN_ERROR_ACTIVE,
            'error_msg'		=> 'ACTIVE_ERROR',
            'user_row'		=> $anonymous_user
        );
    }

    if (!_auth_mdc_check_password($mdcuser['mdcid'], $password, $mdcuser['password'])) {
        return array(
            'status'		=> LOGIN_ERROR_PASSWORD,
            'error_msg'		=> 'LOGIN_ERROR_PASSWORD',
            'user_row'		=> $anonymous_user
        );
    } else {
        // Everything is good on the MDC side.  Let's make sure it's all good on the PHPBB side.
        
        $sql ='SELECT user_id, username, user_password, user_passchg, user_email, user_type FROM '.USERS_TABLE." WHERE user_id = '".$db->sql_escape(utf8_clean_string($mdcuser['id']))."'";
        $result = $db->sql_query($sql);
        $row = $db->sql_fetchrow($result);
        $db->sql_freeresult($result);

        // The user already exists in the phpbb database.  Make sure they're valid, update anything needed, and log them in
        if ($row) {
            // User inactive...
            if ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE) {
                return array(
                    'status'		=> LOGIN_ERROR_ACTIVE,
                    'error_msg'		=> 'ACTIVE_ERROR',
                    'user_row'		=> $row,
                );
            }

            // Check if they've changed their name or email on the MDC side.  If they have, update them in phpbb.
            if (($row['username'] != $mdcuser['username']) || ($row['user_email'] != $mdcuser['email'])) {
                $sql =' UPDATE '.USERS_TABLE.'
                        SET username="'.$db->sql_escape(utf8_clean_string($mdcuser['username'])).'", user_email="'.$db->sql_escape(utf8_clean_string($mdcuser['email'])).'"
                        WHERE user_id = "'.$db->sql_escape(utf8_clean_string($mdcuser['id'])).'"';
                $db->sql_query($sql);
            }

            // Sync groups from MDC to phpbb
            _auth_mdc_set_admin($mdcuser);

            // Successful login... set user_login_attempts to zero...
            return array(
                'status'		=> LOGIN_SUCCESS,
                'error_msg'		=> false,
                'user_row'		=> $row,
            );
        } else {
            // Everyone is happy, but the user doesn't exist in phpbb yet.  That means we'll need to create the row.  Normally phpbb
            // can do this automatically if you return LOGIN_SUCCESS_CREATE_PROFILE here, however, I want to do some special group stuff
            // so we get to do it ourselves
        
            // Check if it's a valid username as far as phpbb is concerned.  This is pretty lenient with USERNAME_CHARS_ANY but it will prevent stuff like single quotes
            if (($ret = validate_username($mdcuser['username'])) !== false) {
                return array(
                    'status'	=> LOGIN_ERROR_USERNAME,
                    'error_msg'	=> $ret,
                    'user_row'	=> $anonymous_user
                );
            }
            
            // retrieve default group id
            $sql = 'SELECT group_id FROM '.GROUPS_TABLE." WHERE group_name = '".$db->sql_escape('REGISTERED')."' AND group_type = ".GROUP_SPECIAL;
            $result = $db->sql_query($sql);
            $group = $db->sql_fetchrow($result);
            $db->sql_freeresult($result);

            if (!$group) {
                trigger_error('NO_GROUP');
            }

            // generate user account data
            $new_user_row = array(
                'user_id'       => $mdcuser['id'],
                'user_type'		=> USER_NORMAL,
                'group_id'		=> (int) $group['group_id'],
                'user_ip'		=> $user->ip,
                'username'		=> $mdcuser['username'],
                'user_password'	=> phpbb_hash(mt_rand(1000,100000)),// Why does phpbb want to cache the password locally?
                'user_email'	=> $mdcuser['email'],
            );

            if ($id = user_add($new_user_row)) {
                // We've got a user id.  phpbb doesn't have a way to add more than 1 group when creating a user so we have to do that afterwards
                _auth_mdc_set_admin($mdcuser);

                return array(
                    'status'		=> LOGIN_SUCCESS,
                    'error_msg'		=> false,
                    'user_row'		=> $new_user_row,
                );
            }

            // Something went wrong.  Return general error and anonymous user.
            return array(
                'status'		=> LOGIN_ERROR_EXTERNAL_AUTH,
                'error_msg'		=> 'GENERAL_ERROR'.' Failed to create new user',
                'user_row'		=> array('user_id' => ANONYMOUS),
            );
        }
    }
}

function acp_mdc(&$new) {
	$tpl = '
	<div style="background-color:#fed;">
        <h4>MDC Configuration</h4>
        <div style="padding: 0px 0px 15px 15px;">
        <dl>
            <dt><label for="mdc_hostname">MDC Hostname:</label><br /><span>MDC Database (can be a slave, only needs read-only)</span></dt>
            <dd><input type="text" id="mdc_hostname" size="40" name="config[mdc_hostname]" value="' . $new['mdc_hostname'] . '" /></dd>
        </dl>
        <dl>
            <dt><label for="mdc_username">MDC Username:</label><br /><span>Username</span></dt>
            <dd><input type="text" id="mdc_username" size="40" name="config[mdc_username]" value="' . $new['mdc_username'] . '" /></dd>
        </dl>
        <dl>
            <dt><label for="mdc_password">MDC Password:</label><br /><span>Password</span></dt>
            <dd><input type="password" id="mdc_password" size="40" name="config[mdc_password]" value="' . $new['mdc_password'] . '" /></dd>
        </dl>
        <dl>
            <dt><label for="mdc_database">MDC Database:</label><br /><span>Name of the database</span></dt>
            <dd><input type="text" id="mdc_database" size="40" name="config[mdc_database]" value="' . $new['mdc_database'] . '" /></dd>
        </dl>
        </div>
    </div>
    ';
	// These are fields required in the config table
	return array(
		'tpl'		=> $tpl,
		'config'	=> array('mdc_hostname', 'mdc_username', 'mdc_password', 'mdc_database')
	);
}

/**
 * Private MDC functions
 */
function _auth_mdc_connect_database() {
    global $config;

    return @new mysqli($config['mdc_hostname'], $config['mdc_username'], $config['mdc_password'], $config['mdc_database']);
}

function _auth_mdc_check_password($userid, $rawPassword, $encPassword) {
    if (empty($encPassword)) {
        return false;
    }
    $hashedPassword = md5($userid . '-' . md5($rawPassword));
    return $encPassword == $hashedPassword;
}

function _auth_mdc_set_admin($mdcuser) {
    $DEKI_ADMIN = 5; // Dekiwiki role ID for admins
    $PHPBB_ADMIN_GROUP_ID = 5; // group ID for phpbb admins
    
    if ($mdcuser['user_role_id'] == $DEKI_ADMIN) {
        return group_user_add($PHPBB_ADMIN_GROUP_ID, $mdcuser['id']);
    } else {
        return group_user_del($PHPBB_ADMIN_GROUP_ID, $mdcuser['id']);
    }
}

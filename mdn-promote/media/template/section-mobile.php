<?php include "./inc/template.php";
head(
  $title = 'Mobile | Mozilla Developer Network',
  $pageid = 'mobile',
  $bodyclass = 'section-mobile landing',
  $headerclass = ''
); ?>
<div class="global-notice">
  <div class="wrap">
    <p><strong>Notice:</strong> This is an example of a global notice message.</p>
  </div>
</div>

<header id="section-head">
<div class="wrap">
    <p class="intro">Welcome to the Mobile Developer Community:</p> 
    <h1 id="logo-mobile" class="mobile">Mobile</h1>
    
    <div class="util">
      <p><strong>Are you ready to make browsing better?</strong></p>
      <ul>
        <li class="util-twitter"><a href="#">Twitter</a></li>
        <li class="util-rss"><a href="#">Subscribe</a></li>
        <li class="util-discuss"><a href="#">Join the Mobile discussions!</a></li>
      </ul>
    </div>
</div>
</header>

<section id="content">
<div class="wrap sidebar">
  <section id="content-main" role="main">
  
    <section class="boxed">
      <div id="popular-docs" class="articles-list">
        <header class="head section-mobile">
          <h2>Popular <span class="mobile">Mobile</span> Documentation</h2>
        </header>
        
        <ul class="hfeed">
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Integer vitae libero ac risus egestas placerat</a></h4>
            <p class="entry-summary">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Han Solo</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Lorem ipsum dolor sit amet</a></h4>
            <p class="entry-summary">Ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Aenean dignissim pellentesque felis.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Jay Patel</a></cite> on <abbr class="updated" title="2010-06-07">Friday, June 4, 2010</abbr> and filed under: <a href="#" rel="tag">Firefox</a>, <a href="#" rel="tag">Thunderbird</a>, <a href="#" rel="tag">Seamonkey</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc</a></h4>
            <p class="entry-summary">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore tincidunt.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> on <abbr class="updated" title="2010-06-07">Wednesday, June 9, 2010</abbr> and filed under: <a href="#" rel="tag">Operator</a>, <a href="#" rel="tag">microformats</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Fusce pellentesque suscipit nibh</a></h4>
            <p class="entry-summary">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Boba Fett</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">Fennec</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Donec quis dui at dolor tempor interdum</a></h4>
            <p class="entry-summary">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
        </ul>
        <p class="all"><a href="#" class="go">All mobile development documentation</a></p>
      </div>
      
      <div id="videos">
        <header class="subhead">
          <h2>Watch <span class="mobile">Mobile</span> Videos</h2>
        </header>
        <ul class="hfeed">
          <li class="hentry">
            <h3 class="entry-title">
              <a href="#" class="mobile" title="Watch this video">
                <img src="./img/ragavan_summit_2010.jpg" alt="" height="150" width="270">
                <span>Video Title</span>
              </a>
            </h3>
            <p class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </li>
          <li class="hentry">
            <h3>
              <a href="#" class="mobile" title="Watch this video">
                <img src="./img/stuart_summit_2010.jpg" alt="" height="150" width="270">
                <span>Video Title That Is Long Enough To Wrap To Another Line</span>
              </a>
            </h3>
            <h4 class="entry-title">Video Subtitle That Is Also Quite Long So It Will Wrap To Multiple Lines</h4>
            <p class="entry-summary">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </li>
        </ul>
      </div>

      <div id="fave-tools">
        <header class="subhead">
          <h3>Favorite <span class="mobile">Mobile</span> Tools</h3>
        </header>
        <ul class="tools">
          <li>
            <h4><a href="#">Weave Browser Sync <img src="./img/fpo55.png" alt="" width="65" /></a></h4>
            <p class="desc">Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
            <p class="meta">Filed under: <a href="#" rel="tag">Category</a>, <a href="#" rel="tag">Category</a></p>
          </li>
          <li>
            <h4><a href="#">Firebug <img src="./img/icn-tool-firebug.png" alt="" width="65" /></a></h4>
            <p class="desc">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
            <p class="meta">Filed under: <a href="#" rel="tag">Category</a>, <a href="#" rel="tag">Category</a>, <a href="#" rel="tag">Category</a></p>
          </li>
          <li>
            <h4><a href="#">Web Developer Toolbar <img src="./img/icn-tool-devtoolbar.png" alt="" width="65" /></a></h4>
            <p class="desc">Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus.</p>
            <p class="meta">Filed under: <a href="#" rel="tag">Category</a></p>
          </li>
          <li>
            <h4><a href="#">Some Other Useful Tool <img src="./img/fpo55.png" alt="" width="65" /></a></h4>
            <p class="desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
            <p class="meta">Filed under: <a href="#" rel="tag">Category</a>, <a href="#" rel="tag">Category</a>, <a href="#" rel="tag">Category</a></p>
          </li>
          <li class="all"><a href="#" class="go">All mobile development tools</a></li>
        </ul>
      </div>
      
      <div id="fave-articles" class="articles-list">
        <header class="subhead">
          <h3>Favorite <span class="mobile">Mobile</span> Articles</h3>
        </header>
        <ul class="hfeed">
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Integer vitae libero ac risus egestas placerat</a></h4>
            <p class="entry-summary">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Lorem ipsum dolor sit amet</a></h4>
            <p class="entry-summary">Ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Aenean dignissim pellentesque felis.</p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc</a></h4>
            <p class="entry-summary">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore tincidunt.</p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Fusce pellentesque suscipit nibh</a></h4>
            <p class="entry-summary">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Donec quis dui at dolor tempor interdum</a></h4>
            <p class="entry-summary">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
          </li>
        </ul>
      </div>
      
      <div id="recent-news" class="articles-list">
        <header class="subhead">
          <h3>Recent <span class="mobile">Mobile</span> News &amp; Updates</h3>
        </header>
        <ul class="hfeed">
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Integer vitae libero ac risus egestas placerat</a></h4>
            <p class="entry-summary">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Han Solo</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Lorem ipsum dolor sit amet</a></h4>
            <p class="entry-summary">Ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Aenean dignissim pellentesque felis.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Jay Patel</a></cite> on <abbr class="updated" title="2010-06-07">Friday, June 4, 2010</abbr> and filed under: <a href="#" rel="tag">Firefox</a>, <a href="#" rel="tag">Thunderbird</a>, <a href="#" rel="tag">Seamonkey</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc</a></h4>
            <p class="entry-summary">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore tincidunt.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> on <abbr class="updated" title="2010-06-07">Wednesday, June 9, 2010</abbr> and filed under: <a href="#" rel="tag">Operator</a>, <a href="#" rel="tag">microformats</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Fusce pellentesque suscipit nibh</a></h4>
            <p class="entry-summary">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Boba Fett</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">Fennec</a></p>
          </li>
          <li class="hentry">
            <h4 class="entry-title"><a href="#" rel="bookmark">Donec quis dui at dolor tempor interdum</a></h4>
            <p class="entry-summary">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
        </ul>
        <p class="all"><a href="#" class="go">All mobile development entries</a></p>
      </div>
    </section><!-- /.boxed -->
    
  </section><!-- /#content-main -->
  
  <aside id="content-sub" role="complementary">
  
    <div class="module" id="section-trends">
      <h3 class="mod-title"><span class="mobile">Mobile</span> Developer Trends</h3>
      <p class="mod-intro">Up to date trends and popular content based on number of tags on a given entry/doc/tool. Alphabetical order.</p>
      <ol class="heat-graph">
        <li><span style="width:50%;"><a href="#">Accessory <b>50</b></a></span></li>
        <li><span style="width:80%;"><a href="#">Concept <b>80</b></a></span></li>
        <li><span style="width:100%;"><a href="#">CSS <b>100</b></a></span></li>
        <li><span style="width:6%;"><a href="#">iPad <b>6</b></a></span></li>
        <li><span style="width:17%;"><a href="#">iPhone <b>17</b></a></span></li>
        <li><span style="width:94%;"><a href="#">HTML <b>94</b></a></span></li>
        <li><span style="width:33%;"><a href="#">Operator <b>33</b></a></span></li>
        <li><span style="width:24%;"><a href="#">Prism <b>24</b></a></span></li>
        <li><span style="width:66%;"><a href="#">Property <b>66</b></a></span></li>
        <li><span style="width:10%;"><a href="#">Prototype <b>10</b></a></span></li>
      </ol>
    </div><!-- /trends -->
  
    <div class="module" id="help">
      <h3>Help Us.</h3>
      <p>Help write, edit, review, and translate our documentation:</p>
      <p><a href="#" class="go">Get started today!</a></p>
    </div>
  
    <div class="module" id="active">
      <h3 class="mod-title">Active <span class="mobile">Mobile</span> Developers</h3>
      <ol class="gallery">
        <li><a href="#" title="Leia Organa"><img src="img/fpo55.png" alt="Leia Organa" width="32" height="32" /></a></li>
        <li><a href="#" title="Han Solo"><img src="img/fpo55.png" alt="Han Solo" width="32" height="32" /></a></li>
        <li><a href="#" title="Obi-Wan Kenobi"><img src="img/fpo55.png" alt="Obi-Wan Kenobi" width="32" height="32" /></a></li>
        <li><a href="#" title="Lando Calrissian"><img src="img/fpo55.png" alt="Lando Calrissian" width="32" height="32" /></a></li>
        <li><a href="#" title="Boba Fett"><img src="img/fpo55.png" alt="Boba Fett" width="32" height="32" /></a></li>
        <li><a href="#" title="Darth Vader"><img src="img/fpo55.png" alt="Darth Vader" width="32" height="32" /></a></li>
        <li><a href="#" title="Luke Skywalker"><img src="img/fpo55.png" alt="Luke Skywalker" width="32" height="32" /></a></li>
        <li><a href="#" title="Yoda"><img src="img/fpo55.png" alt="Yoda" width="32" height="32" /></a></li>
      </ol>
    </div>
    
    <form class="module" id="contact" method="post" action="#">
      <h3 class="mod-title">Got some feedback or ideas you want to share?</h3>
      <p class="mod-intro">Drop us a line and let us know what&#8217;s on your mind.</p>
      <fieldset>
        <ol>
          <li><label for="contact-name">Name</label> <input type="text" id="contact-name" name="name" /></li>
          <li><label for="contact-email">Email</label> <input type="text" id="contact-email" name="email" /></li>
          <li><label for="contact-message">Feedback</label> <textarea id="contact-message" name="message" rows="10" cols="20"></textarea></li>
          <li class="fm-submit"><button type="submit">Submit</button></li>
        </ol>
      </fieldset>
    </form>

  </aside><!-- /#content-sub -->

</div>
</section><!-- /#content -->

<section id="content-latest">
<div class="wrap">
  
  <div id="latest-forums" class="boxed">
    <header>
      <h3>Latest <span class="mobile">Mobile</span> Discussions from Our Forums:</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </header>
    <ul class="hfeed">
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Lando Calrissian</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Excepteur sint occaecat cupidatat non proident labore et dolore magna&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Jay Patel</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Han</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> morgamic</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Duis aute irure dolor in commodo ipsum reprehenderit in voluptate ipsum dolor sit amet, consectetur adipisicing elit velit esse cillum dolore eu fugiat nulla pariatur&hellip;</a></p>
      </li>
    </ul>
  </div>
  
  <div id="latest-comments" class="boxed">
    <header>
      <h3>Latest <span class="mobile">Mobile</span> Comments from Our Community:</h3>
      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </header>
    <ul class="hfeed">
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Jay Patel</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> morgamic</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Lando Calrissian</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Excepteur sint occaecat cupidatat non proident&hellip;</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="img/fpo55.png" alt="" class="photo" width="38" height="38" /> Han</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum&hellip;</a></p>
      </li>
    </ul>
  </div>
    
</div>
</section>

<?php foot(); ?>

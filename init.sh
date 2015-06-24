#!/bin/bash
INPUT=repos.csv
OLDIFS=$IFS
IFS=,
[ ! -f $INPUT ] && { echo "$INPUT file not found"; exit 99; }
while read repotype reponame repourl
do
    if [[ -n "$repotype" && 
          -n "$reponame" && 
          -n "$repourl"  &&
          $repotype != "repotype" &&
          $reponame != "reponame" && 
          $repourl != "repourl" ]]; then
        echo "Creating $reponame ..."
        if [[ "$repotype" == "git" ]]; then
            git clone "$repourl" "$reponame"
        elif [[ "$repotype" == "svn" ]]; then
            mkdir "$reponame"
            cd "$reponame"
                svn checkout "$repourl" .
            cd ..
        fi

    fi
done < $INPUT
IFS=$OLDIFS

echo "*~" > .gitignore
echo ".svn" >> .gitignore
echo ".git" >> .gitignore
echo "*#" >> .gitignore


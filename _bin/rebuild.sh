#!/bin/bash
cd /home/emir/Work/research/homepage/emir-munoz.github.com/

# generate publications/index.html file
php publications/body.php

# run jekyll
jekyll --no-auto

# upload to branch
git add .
git commit -m "Release 1.2 home page"
git push origin master

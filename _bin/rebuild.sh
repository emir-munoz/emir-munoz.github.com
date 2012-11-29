#!/bin/bash
cd /home/emir/Work/research/homepage/emir-munoz.github.com/

# generate publications/index.html file
cd publications/
php body.php
cd ..

# run jekyll
jekyll --no-auto

# upload to branch
git add .
git commit -m "Release 1.2 home page"
git push origin master

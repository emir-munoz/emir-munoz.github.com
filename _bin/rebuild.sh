#!/bin/bash
cd /home/emir/Work/research/homepage/emir-munoz.github.com/

# generate publications/index.html file
#cd publications/
#php body.php
#cd ..

# run jekyll
jekyll --no-auto

# upload to branch
#git add .
#git commit -m "Release 1.2 home page"
#git push origin master

# Push files @Emir Muñoz
BRANCH="$(git rev-parse --symbolic --abbrev-ref $(git symbolic-ref HEAD))"

ADD="$(git add -A .)"
test -x "$ADD" && exec "$ADD" "$@"

COMMIT="$(git commit -m 'Updates homepage')"
test -x "$COMMIT" && exec "$COMMIT" "$@"

PUSH="$(git push origin $BRANCH)"
test -x "PUSH" && exec "$PUSH" "$@"

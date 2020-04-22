#!/bin/bash
git checkout master
git merge dev
git add .
git commit -m "validé"
git push --all
git checkout dev



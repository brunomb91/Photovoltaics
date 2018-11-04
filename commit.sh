#!/bin/bash

echo "Insert a message to commit: "
read COMMIT

echo $COMMIT

git add .
git commit -m "$COMMIT"
git push origin master


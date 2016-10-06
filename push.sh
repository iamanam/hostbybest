#!/bin/bash

echo 'process started'
DB_EXPORT="$(wp db export)"
echo "${DB_EXPORT}"
ADD="$(git add .)"
echo "${ADD}"
echo 'put commit message'
read commit_msg
COMMIT="$(git commit -m '$commit_msg')"
echo "${COMMIT}"
PUSH="$(git push origin master)"
echo "${PUSH}"
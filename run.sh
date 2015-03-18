#!/usr/bin/env bash

git clone git@github.com:noscosystems/learn.git "./learn"
cd learn/
composer update --prefer-dist
php learn.php

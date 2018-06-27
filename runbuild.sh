#!/usr/bin/env bash
echo "PHPCS"
bin/phpcs --standard=phpcs.xml .
echo "PHPUNIT"
bin/phpunit -c . Tests/

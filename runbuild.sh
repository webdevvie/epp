#!/usr/bin/env bash
echo "PHPCS"
bin/phpcs --standard=phpcs.xml src
echo "phpstan"
bin/phpstan
echo "PHPUNIT"
bin/phpunit -c . Tests/


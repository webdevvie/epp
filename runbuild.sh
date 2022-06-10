#!/usr/bin/env bash
echo "PHPCS"
bin/phpcs --standard=phpcs.xml src
echo "PHPUNIT"
bin/phpunit -c . Tests/

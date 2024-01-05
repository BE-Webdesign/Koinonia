#!/bin/bash
docker run --rm -v $(pwd):/app willhallonline/wordpress-phpcs:alpine phpcs --standard=phpcs.xml.dist src
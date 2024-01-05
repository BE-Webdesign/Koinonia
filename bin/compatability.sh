#!/bin/bash
echo "Testing PHP 8.1 Compat"
docker run --rm -v "$PWD:$PWD" -w "$PWD" tophfr/phpcompatibility -p --runtime-set testVersion 8.1 src
echo "Testing PHP 8.2 Compat"
docker run --rm -v "$PWD:$PWD" -w "$PWD" tophfr/phpcompatibility -p --runtime-set testVersion 8.2 src

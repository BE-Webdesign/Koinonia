#!/bin/bash
docker run --rm --interactive \
  --volume $PWD:/app \
  -w /app \
  --user $(id -u):$(id -g) \
  php:8.2-cli $@
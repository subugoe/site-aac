#!/bin/bash

git pull

docker exec -it $(docker-compose ps -q web) /bin/bash -c "composer install"
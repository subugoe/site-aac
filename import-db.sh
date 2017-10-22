#!/bin/bash

docker exec -it $(docker-compose ps -q mysql) /bin/bash -c "mysql -utypo3 -p -e \"drop database typo3\""

docker exec -it $(docker-compose ps -q mysql) /bin/bash -c "mysql -utypo3 -p -e \"create database typo3\""

docker cp backup.sql $(docker-compose ps -q mysql):backup.sql

docker exec -it $(docker-compose ps -q mysql) /bin/bash -c "mysql -utypo3 -p typo3 < backup.sql"
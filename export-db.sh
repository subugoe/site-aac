#!/bin/bash

docker exec -it $(docker-compose ps -q mysql) /bin/bash -c "mysqldump -utypo3 -p typo3 > export.sql"

docker cp $(docker-compose ps -q mysql):export.sql export.sql

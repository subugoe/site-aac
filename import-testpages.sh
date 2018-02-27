#!/bin/bash
# Script to import T3D-Pages. 
# The filename of the T3D-Pages has to be the first argument, starting from typo3conf directory
# The PID of the parent page has to be the second argument

T3D="$1"
if [ ! $# -eq 2 ] ;then
  echo "Please provide filename of T3D archive (starting in typo3conf-directory) and PID of node to hook it on to"
  echo "Eg: typo3conf/ext/tmpl_fidaac/test/T3D-testpages.t3d 8"

  exit
fi

docker exec -it $(docker-compose ps -q web) /bin/bash -c "./web/typo3/sysext/core/bin/typo3 impexp:import $1 $2"
exit 0

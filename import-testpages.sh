docker exec -it $(docker-compose ps -q web) /bin/bash -c "./web/typo3/sysext/core/bin/typo3 impexp:import typo3conf/ext/tmpl_fidaac/test/T3D_testpages.t3d 8"

# TYPO3 AAC Distribution

AAC Website with MySQL and Solr.

## Prerequisites

* [composer](https://getcomposer.org/download/)
* [docker-compose](https://docs.docker.com/compose/install/)

Make sure you are using the latest versions.

## Configuration

Create a file ```InstanceConfiguration.php``` in ```typo3conf``` with and change the parameters as needed:

```$php
<?php
$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = 'your-secret-hashed-install-tool-password';
$GLOBALS['TYPO3_CONF_VARS']['DB'] = [
    'Connections' => [
        'Default' => [
            'charset' => 'utf8',
            'dbname' => 'typo3',
            'driver' => 'mysqli',
            'host' => 'mysql',
            'password' => 'typo3',
            'port' => 3306,
            'user' => 'typo3',
        ],
    ],
];


$GLOBALS['TYPO3_CONF_VARS']['SYS']['encryptionKey'] = 'your-secret-encryption-key';

```

## Startup

```docker-compose up -d``` will start your application and provides a web server at http://localhost:8900, a Solr instance
at http://localhost:8999, a MySQL instance at 127.0.0.1:33061.

Internally the services are exposed at:

* mysql:3306
* solr:8983

* open your browser at "http://localhost:8900"

## Maintenance

```docker-compose run --rm web cd /app;  composer install```

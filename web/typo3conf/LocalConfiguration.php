<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'typo3',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'typo3',
                'port' => 33061,
                'user' => 'typo3',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'belog' => 'a:0:{}',
            'beuser' => 'a:0:{}',
            'documentation' => 'a:0:{}',
            'filemetadata' => 'a:0:{}',
            'find' => 'a:0:{}',
            'fluid_styled_content' => 'a:0:{}',
            'form' => 'a:0:{}',
            'info_pagetsconfig' => 'a:0:{}',
            'metaseo' => 'a:4:{s:10:"pagingSize";s:0:"";s:10:"enableBeta";s:1:"0";s:23:"enableIntegrationTTNews";s:1:"1";s:29:"sitemap_clearCachePossibility";s:0:"";}',
            'news' => 'a:15:{s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"1";s:21:"contentElementPreview";s:1:"1";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"dateTimeNotRequired";s:1:"0";s:11:"archiveDate";s:4:"date";s:24:"showAdministrationModule";s:1:"1";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";}',
            'nkwgok' => 'a:3:{s:11:"opacBaseURL";s:40:"https://opac.sub.uni-goettingen.de/DB=1/";s:7:"CSSPath";s:0:"";s:7:"CSVURLs";s:317:"http://dev.aac.sub.uni-goettingen.de/fileadmin/gok/csv/AACNeuerwerbungen.csv http://dev.aac.sub.uni-goettingen.de/fileadmin/gok/csv/AACNeuerwerbungenHistory.csv http://dev.aac.sub.uni-goettingen.de/fileadmin/gok/csv/AACNeuerwerbungenLiterature.csv http://dev.aac.sub.uni-goettingen.de/fileadmin/gok/csv/geschichte.csv";}',
            'pazpar2' => 'a:1:{s:10:"backendUrl";s:55:"http://pazpar2.sub.uni-goettingen.de/pazpar2/search.pz2";}',
            'powermail' => 'a:8:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
            'realurl' => 'a:6:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:17:"segTitleFieldList";s:0:"";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"0";}',
            'recycler' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:0:{}',
            'rx_shariff' => 'a:5:{s:8:"services";s:85:"GooglePlus, Facebook, LinkedIn, Reddit, StumbleUpon, Flattr, Pinterest, Xing, AddThis";s:14:"allowedDomains";s:11:"SERVER_NAME";s:3:"ttl";s:4:"3600";s:15:"facebook_app_id";s:0:"";s:15:"facebook_secret";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'solr' => 'a:4:{s:35:"useConfigurationFromClosestTemplate";s:1:"0";s:43:"useConfigurationTrackRecordsOutsideSiteroot";s:1:"1";s:29:"useConfigurationMonitorTables";s:0:"";s:27:"allowSelfSignedCertificates";s:1:"0";}',
            't3editor' => 'a:0:{}',
            'tmpl_fidaac' => 'a:0:{}',
            'tstemplate' => 'a:0:{}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
            'workspaces' => 'a:0:{}',
        ],
    ],
    'EXTCONF' => [
        'helhum-typo3-console' => [
            'initialUpgradeDone' => '8.7',
        ],
        'lang' => [
            'availableLanguages' => [],
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'rsa',
        'pageNotFoundOnCHashError' => false,
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => 'yoyoyo',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'FID AAC',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
        'trustedHostsPattern' => '.*',
    ],
];

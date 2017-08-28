<?php
$instanceConfigurationFile = __DIR__ . '/InstanceConfiguration.php';

if (file_exists($instanceConfigurationFile)) {
    require_once($instanceConfigurationFile);
}

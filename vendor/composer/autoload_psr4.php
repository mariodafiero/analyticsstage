<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Piwik\\Tests\\' => array($baseDir . '/tests/PHPUnit'),
    'Piwik\\Plugins\\' => array($baseDir . '/plugins'),
    'Piwik\\Network\\' => array($vendorDir . '/piwik/network/src'),
    'Piwik\\Ini\\' => array($vendorDir . '/piwik/ini/src'),
    'Piwik\\Decompress\\' => array($vendorDir . '/piwik/decompress/src'),
    'Piwik\\Cache\\' => array($vendorDir . '/piwik/cache/src'),
    'Piwik\\' => array($baseDir . '/core'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Invoker\\' => array($vendorDir . '/php-di/invoker/src'),
    'Interop\\Container\\' => array($vendorDir . '/container-interop/container-interop/src/Interop/Container'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'DeviceDetector\\' => array($vendorDir . '/piwik/device-detector'),
    'DI\\' => array($vendorDir . '/php-di/php-di/src/DI'),
);
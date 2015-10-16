<?php

require_once __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Noodlehaus\Config;

// initialize config
$conf = new Config(__DIR__.'/config');

$projectName = $conf->get('projectName');
$logFile = $conf->get('logFile');

// create monolog channel
$logger = new Logger($projectName);
$logger->pushHandler(new StreamHandler($logFile, Logger::DEBUG));

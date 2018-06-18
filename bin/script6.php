<?php
use controller\Logger;
use adapters\DbLoggerAdapter;
require '../vendor/autoload.php';

$adapter = new DbLoggerAdapter();
$adapter->configure(array('host' => '127.0.0.1', 'login' => 'developer', 'password' => 'developer'));
$logger = new Logger($adapter);
$logger->logger('log to database');
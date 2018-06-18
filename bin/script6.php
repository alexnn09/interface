<?php
use controller\Logger;
use adapters\DbAdapter;
require '../src/Controller/DbLoggerAdapter.php';
require '../src/Logger/LoggerController.php';


$adapter = new DbAdapter();
$adapter->configure(array('host' => '127.0.0.1', 'login' => 'developer', 'password' => 'developer'));
$logger = new Logger($adapter);
$logger->logger('log to dbasefd');
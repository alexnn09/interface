<?php
use controller\Logger;
use adapters\FileLoggerAdapter;
require '../vendor/autoload.php';



$adapter = new FileLoggerAdapter();
$adapter->configure(array('filename' => 'log.txt'));
$logger = new Logger($adapter);
$logger->logger('one');
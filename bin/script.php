<?php
use controller\Logger;
use adapters\FileAdapter;
require '../src/Controller/FileLoggerAdapter.php';
require '../src/Logger/LoggerController.php';




$adapter = new FileAdapter();
$adapter->configure(array('filename' => 'log1.txt'));
$logger = new Logger($adapter);
$logger->logger('test');
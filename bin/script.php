<?php
use App\Controller\Logger;
use App\Adapters\FileLoggerAdapter;
require_once __DIR__.'/../vendor/autoload.php';




$adapter = new FileLoggerAdapter();
$adapter->configure(array('filename' => 'log1.txt'));
$logger = new Logger($adapter);
$logger->logger('test');
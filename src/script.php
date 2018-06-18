<?php
use controller\logger;
use Adapter\fileAdapter;
require_once '../vendor/autoload.php';



$adapter = new fileAdapter();
$adapter->configure(array('filename' => 'log1.txt'));
$logger = new logger($adapter);
$logger->logger('one');
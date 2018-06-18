<?php
use controller\logger;
use Adapter\fileAdapter;
require_once '../vendor/autoload.php';



$adapter = new fileAdapter();
$adapter->configure(array('filename' => 'log.txt'));
$logger = new logger($adapter);
$logger->logger('one');
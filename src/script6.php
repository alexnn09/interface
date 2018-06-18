<?php
use controller\logger;
use Adapter\dbAdapter;
require_once '../vendor/autoload.php';



$adapter = new dbAdapter();
$adapter->configure(array('host' => '127.0.0.1', 'login' => 'dev', 'password' => 'developer'));
$logger = new logger($adapter);
$logger->logger('log to db');
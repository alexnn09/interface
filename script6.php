<?php
use log\logger;
require 'logger.php';



$adapter = new \log\dbAdapter();
$adapter->configure(array('host' => '127.0.0.1', 'login' => 'developer', 'password' => 'developer'));
$logger = new logger($adapter);
$logger->logger('one');
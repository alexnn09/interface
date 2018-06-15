<?php
use log\logger;
require 'logger.php';



$adapter = new \log\fileAdapter();
$adapter->configure(array('filename' => 'log.txt'));
$logger = new logger($adapter);
$logger->logger('one');
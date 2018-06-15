<?php
use log\logger;
require 'logger.php';



$adapter = new \log\consoleAdapter();
$logger = new logger($adapter);
$logger->logger('one');
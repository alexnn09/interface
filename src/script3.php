<?php
use controller\logger;
use Adapter\consoleAdapter;
require_once '../vendor/autoload.php';



$adapter = new consoleAdapter();
$logger = new logger($adapter);
$logger->logger('one');
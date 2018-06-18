<?php

use controller\Logger;
use adapters\ConsoleLoggerAdapter;
require '../vendor/autoload.php';



$adapter = new ConsoleLoggerAdapter();
$logger = new Logger($adapter);
$logger->logger('one');
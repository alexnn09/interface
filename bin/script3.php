<?php

use controller\Logger;
use adapters\ConsoleAdapter;
require '../src/Controller/ConsoleLoggerAdapter.php';
require '../src/Logger/LoggerController.php';



$adapter = new ConsoleAdapter();
$logger = new Logger($adapter);
$logger->logger('one');
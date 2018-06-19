<?php

use App\Controller\Logger;
use App\Adapters\ConsoleLoggerAdapter;
require '../vendor/autoload.php';



$adapter = new ConsoleLoggerAdapter();
$logger = new Logger($adapter);
$logger->logger('one');
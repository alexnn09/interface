<?php

use controller\Logger;
use adapters\ConsoleLoggerAdapter;




$adapter = new ConsoleLoggerAdapter();
$logger = new Logger($adapter);
$logger->logger('one');
<?php
use controller\Logger;
use adapters\SlackAdapter;
require '../src/Controller/SlackLoggerAdapter.php';
require '../src/Logger/LoggerController.php';



$adapter = new SlackAdapter();
$adapter->configure(array('hook' => 'https://hooks.slack.com/services/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', 'cname' => '#dev'));
$logger = new Logger($adapter);
$logger->logger('one');
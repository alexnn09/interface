<?php
use controller\Logger;
use adapters\SlackLoggerAdapter;
require '../vendor/autoload.php';



$adapter = new SlackLoggerAdapter();
$adapter->configure(array('hook' => 'https://hooks.slack.com/services/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', 'cname' => '#dev'));
$logger = new Logger($adapter);
$logger->logger('one');
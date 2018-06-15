<?php
use log\logger;
require 'logger.php';



$adapter = new \log\slackAdapter();
$adapter->configure(array('hook' => 'https://hooks.slack.com/services/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', 'cname' => '#dev'));
$logger = new logger($adapter);
$logger->logger('one');
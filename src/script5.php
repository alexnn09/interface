<?php
use controller\logger;
use Adapter\slackAdapter;
require_once '../vendor/autoload.php';




$adapter = new slackAdapter();
$adapter->configure(array('hook' => 'https://hooks.slack.com/services/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3', 'cname' => '#dev'));
$logger = new logger($adapter);
$logger->logger('one');
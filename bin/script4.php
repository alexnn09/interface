<?php
use App\Controller\Logger;
use App\Adapters\SlackLoggerAdapter;
require '../vendor/autoload.php';



$adapter = new SlackLoggerAdapter();
$adapter->configure(array('hook' => 'https://hooks.slack.com/services/T18MXJD70/B292Y9DE3/6rY5tfJ5JRjXDqB5BUcxP3', 'cname' => '#dev'));
$logger = new Logger($adapter);
$logger->logger('one');
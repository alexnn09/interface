<?php

namespace controller;
use Maknz\Slack\Client;
use inter\IAdapter;
use inter\ILogger;
require 'LoggerInterface.php';
require 'LoggerAdapter.php';




class logger implements ILogger
{
    private $adapter;

    public function __construct(IAdapter $adapter)
    {
        $this->adapter=$adapter;

    }
    public function logger(string $message)
    {
        $this->adapter->write($message);
    }

}

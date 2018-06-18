<?php

namespace controller;
use inter\IAdapter;
use inter\ILogger;






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

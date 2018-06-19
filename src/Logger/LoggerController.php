<?php

namespace App\Controller;
use App\Inter\IAdapter;
use App\Inter\ILogger;


class Logger implements ILogger
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

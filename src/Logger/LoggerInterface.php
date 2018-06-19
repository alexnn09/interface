<?php

namespace App\Inter;

interface IAdapter
{
    public function configure(array $options);
    public function write(string $message);
}

interface ILogger
{
    public function __construct(IAdapter $adapter);
    public function logger(string $message);
}

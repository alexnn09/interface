<?php

namespace log;

interface IAdapter
{
    public function configure(array $options);
    public function write(string $message);
}

interface ILogger
{
    public function __consuct(IAdapter $adapter);
    public function log(string $message);
}

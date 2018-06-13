<?php

namespace log;

interface ILogger
{
    public function log(string $message, string $filename);
}
<?php

namespace log;

require "inter.php";

class logger implements ILogger
{
    public function log(string $message)
    {
        $file = 'log.txt';
        $newmsg=file_get_contents($file);
        $newmsg .= $message.PHP_EOL;
        file_put_contents($file, $newmsg);
    }
}
<?php

namespace log;

require "inter.php";

class logger implements ILogger
{
    public function log(string $message, string $filename)
    {   if($filename=='console') {
        echo "log :".$message;
    } else {
        $newmsg=file_get_contents($filename);
        $newmsg .= $message.PHP_EOL;
        file_put_contents($filename, $newmsg);
    }
    }
}
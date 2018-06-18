<?php
namespace adapters;
use inter\IAdapter;
require 'LoggerInterface.php';




class FileLoggerAdapter implements IAdapter
{
    private $options;

    public function configure(array $options=null)
    {
        $this->options=$options;
    }

    public function write(string $message)
    {
        $options=$this->options;
        $newmsg=file_get_contents($options['filename']);
        $newmsg .= $message.PHP_EOL;
        file_put_contents($options['filename'], $newmsg);
    }
}
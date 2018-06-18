<?php
namespace adapters;
use inter\IAdapter;
require 'LoggerInterface.php';

class ConsoleAdapter implements IAdapter
{
    private $options;

    public function configure(array $options=null)
    {
        $this->options=$options;
    }

    public function write(string $message)
    {
        echo $message;
    }
}
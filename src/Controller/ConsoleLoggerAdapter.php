<?php
namespace adapters;
use inter\IAdapter;
require_once __DIR__.'/../../vendor/autoload.php';


class ConsoleLoggerAdapter implements IAdapter
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
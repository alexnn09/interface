<?php
namespace App\Adapters;
use App\Inter\IAdapter;



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
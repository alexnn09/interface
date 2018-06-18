<?php
namespace adapters;
use inter\IAdapter;
require 'LoggerInterface.php';

class DbLoggerAdapter implements IAdapter
{
    private $options;

    public function configure(array $options=null)
    {
        $this->options=$options;
    }

    public function write(string $message)
    {
        $options=$this->options;
        $connectdb=mysqli_connect($options['host'], $options['login'], $options['password'],'logs');
        if ( !$connectdb ) {
            echo'Подключится к базе данным с данными host: '.$options['host'].' пользователем '.$options['login'].' и паролем '.$options['password'].PHP_EOL;
        } else
        {
            $query = 'insert into logs.logss(time, log) VALUES (' . time() . ',"' . $message . '")';
            mysqli_query($connectdb, $query);
        }
    }
}
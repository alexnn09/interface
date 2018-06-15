<?php

namespace log;

use Maknz\Slack\Client;
require_once 'vendor/autoload.php';
require "inter.php";

class consoleAdapter implements IAdapter
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

class slackAdapter implements IAdapter
{
    private $options;

    public function configure(array $options=null)
    {
        $this->options=$options;
    }

    public function write(string $message)
    {   $options=$this->options;
        $client= new Client($options['hook']);
        $msg=$client->createMessage();
        $msg->to($options['cname'])->send($message);
    }
}

class dbAdapter implements IAdapter
{
    private $options;

    public function configure(array $options=null)
    {
        $this->options=$options;
    }

    public function write(string $message)
    {
        $options=$this->options;
        $connectdb=mysqli_connect($options['host'],$options['user'],$options['password'],'logs');
        $query='insert into logs.logss(time, log) VALUES ('.time().',"'.$message.'")';
        mysqli_query($connectdb, $query);
    }
}

class fileAdapter implements IAdapter
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

class logger implements ILogger
{
    private $adapter;

    public function __construct(IAdapter $adapter)
    {
        $this->adapter=$adapter;

    }
    public function logger(string $message)
    {
        $this->adapter->write($message);
    }

}

$adapter = new fileAdapter();
$adapter->configure(array('filename' => 'loggie.txt'));
$logger=new logger($adapter);
$logger->logger('test message');
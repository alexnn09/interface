<?php
namespace Adapter;
use GuzzleHttp\Exception\ClientException;
use Maknz\Slack\Client;
use inter\IAdapter;

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
        try {
            $client= new Client($options['hook']);
            $msg=$client->createMessage();
            $msg->to($options['cname'])->send($message);
        }
        catch (ClientException $e)
        {
            echo 'Задан неверный Hook';
        }

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
        $connectdb=mysqli_connect($options['host'], $options['login'], $options['password'],'logs');
        if ( !$connectdb ) {
            echo'Подключится к базе данным с данными host: '.$options['host'].' пользователем '.$options['login'].' и паролем '.$options['password'].PHP_EOL;
        } else
            mysqli_close($connectdb);
            $query = 'insert into logs.logss(time, log) VALUES (' . time() . ',"' . $message . '")';
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
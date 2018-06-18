<?php
namespace adapters;
use inter\IAdapter;
use GuzzleHttp\Exception\ClientException;
use Maknz\Slack\Client;
require 'LoggerInterface.php';

class SlackLoggerAdapter implements IAdapter
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
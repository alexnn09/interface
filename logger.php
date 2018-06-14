<?php
namespace log\logger;
require "inter.php";
use Maknz\Slack\Client;
require_once 'vendor/autoload.php';

class message
{
    public function __construct(string $message, string $filename){
        {   if($filename=='console') {
            echo "log :".$message;
        } elseif ($filename=='slack')
        {
            $url="https://hooks.slack.com/services/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";
            $client= new Client($url);
            $msg=$client->createMessage();
            $msg->to('#random')->send($message);


        }
        else {
            $newmsg=file_get_contents($filename);
            $newmsg .= $message.PHP_EOL;
            file_put_contents($filename, $newmsg);
        }
        }
    }
}
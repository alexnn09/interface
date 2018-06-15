<?php

namespace log;
require "inter.php";
use Maknz\Slack\Client;
require_once 'vendor/autoload.php';


class logger implements ILogger
{

    public function log(string $message, string $filename, string $cname='#dev'){
        {   if($filename=='console') {
            echo "log :".$message;
        } elseif ($filename=='slack')
        {
            $url="https://hooks.slack.com/services/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";
            $client= new Client($url);
            $msg=$client->createMessage();
            $msg->to($cname)->send($message);


        }
        elseif ($filename=='db'){
            $connectdb=mysqli_connect('127.0.0.1','developer','developer','logs');

            $query='insert into logs.logss(time, log) VALUES ('.time().',"'.$message.'")';
            mysqli_query($connectdb, $query);


        }
        else {
            $newmsg=file_get_contents($filename);
            $newmsg .= $message.PHP_EOL;
            file_put_contents($filename, $newmsg);
        }
        }
    }
}
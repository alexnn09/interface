<?php
use log\log;
require 'logger.php';



$message='new line';
$filename="log1.txt";
$obj=new log();
$obj->log($message, $filename);
<?php
use log\logger;
require 'logger.php';


$obj=new logger();
$message='new line';
$filename="log1.txt";
$obj->log($message, $filename);
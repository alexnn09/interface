<?php
use log\logger;
require 'logger.php';



$message='new line';
$filename="log1.txt";
$obj=new logger();
$obj->log($message, $filename);
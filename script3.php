<?php
use log\logger;
require 'logger.php';


$obj=new logger();
$message='new line';
$filename="console";
$obj->log($message, $filename);
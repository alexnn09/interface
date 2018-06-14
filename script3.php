<?php
use log\logger;
require 'logger.php';

$message='new line';
$filename="console";
$obj=new logger();
$obj->log($message, $filename);
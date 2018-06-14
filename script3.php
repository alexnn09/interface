<?php
use log\log;
require 'logger.php';

$message='new line';
$filename="console";
$obj=new log();
$obj->log($message, $filename);
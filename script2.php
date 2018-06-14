<?php
use log\log;
require 'logger.php';

$message='new line';
$filename="log2.txt";
$obj=new log();
$obj->log($message, $filename);
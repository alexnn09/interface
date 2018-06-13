<?php
use log\logger;
require 'logger.php';


$obj=new logger();
$message='new line';
$obj->log($message);
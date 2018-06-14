<?php
use log\log;
require 'logger.php';

$obj=new log();
$obj->log('test message', 'slack', '#dev');
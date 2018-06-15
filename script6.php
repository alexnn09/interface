<?php
use log\logger;
require 'logger.php';

$obj=new logger();
$obj->log('test message', 'db');
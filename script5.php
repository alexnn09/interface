<?php
require_once 'logger.php';
use log\logger;

$ewmsg=new logger\message('test text','slack', '#dev');
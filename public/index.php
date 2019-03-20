<?php

define('APPLICATION_PATH', realpath(dirname(__FILE__).'/../'));


//设置跨域
header("Access-Control-Allow-Origin: http://localhost:8080");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
$application = new Yaf\Application(APPLICATION_PATH.'/conf/application.ini');

$application->bootstrap()->run();

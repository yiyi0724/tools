<?php
define('DS', DIRECTORY_SEPARATOR);
define('APPLICATION_PATH', realpath('..' . DS));

define('PUBLIC_PATH', realpath(dirname(__FILE__)));

$app = new \Yaf\Application(APPLICATION_PATH . DS . 'conf' . DS . 'application.ini');

//$application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$app->bootstrap()->run();
?>

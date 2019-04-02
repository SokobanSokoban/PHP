<?php
require $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoload.php';

$config1 = require $_SERVER['DOCUMENT_ROOT'] . '/../config/main.php';
var_dump($config1['rootDir']);
var_dump($_SERVER['DOCUMENT_ROOT'] . '/../config/main.php');

spl_autoload_register([new Autoload(), 'loadClass']);

$controllerName = $_GET['c'] ?: 'user';
$action = $_GET['a'];

$controllersClass = 'App\\controllers\\' . ucfirst($controllerName) . 'Controller';

if (class_exists($controllersClass)) {
    $controller = new $controllersClass;
    $controller->run($action);
} else {
    echo 'No url';
}



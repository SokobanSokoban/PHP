<?php

echo 'on';
$config = [
    // constant
	'rootDir' => $_SERVER['DOCUMENT_ROOT'] . "/../",
	'controllerNamespaces' => '\App\controllers\\',


	'db' => 
	[
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'db' => 'gbphp',
		'user' => 'root',
		'pass' => '',
		'charset' => 'utf8',
	]


];
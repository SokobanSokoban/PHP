<?php

use App\modules\User;
use App\services\BD;
use \App\modules\Good;

include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);


$user = new User();
var_dump($user->getAll());
var_dump($user->find(1));

$good = new Good();
var_dump($good->getAll());
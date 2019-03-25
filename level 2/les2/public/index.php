<?php
include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);


$user = new User(new BD());
$user->getAll();
echo "<hr>";

$good = new Good(new BD());
$good->getAll();

echo $good->calc([45,456,456,56]);

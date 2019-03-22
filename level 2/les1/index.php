<?php
header ("Content-Type: text/html; charset=utf-8");
include('PHP_Level_2.php');
include('_567.php');

$good = new Product(123, "Сапоги", "Нью беланс",
    "Натуральная кожа теленка",
    "44", 1.4, 50000, "Китай", "Пара","12");
$good->view();
$good->removeFromStock(1);
$good->removeFromStock(2);
$good->removeFromStock(2);
$good->removeFromStock(20);

//var_dump($good);
var_dump(PHP_Level_2::$objects);


$tmp = file_get_contents('html.html');
echo str_replace('{{content}}', $content, $tmp);
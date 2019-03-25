<?php
use App\services\Autoload as Autoload;
//use App\modules\User as User;
//use App\modules\ProductBags as Bags;
use App\modules\ProductShoes as ProductShoes;


//namespace App\modules;


include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoload.php';

spl_autoload_register([ new Autoload() , 'loadClass']);


$good =   new ProductShoes('df','23','qwe','234','34','34',34,34,34,34);
var_dump($good);
<?php
   
class PHP_Level_2 {
    public $className ='1';
    public $desc = '1';
    static $objects = [];
    
    function get_desc() {
       return  $this->className.'-'.$this->desc; 
    }
    
    function __construct{
  
        
    }
}

class Product extends PHP_Level_2 {
    
    public $className ='product';
    public $desc = 'prosto tovar magazina'; 
}

$ob = new PHP_Level_2();
$ob->desc = 'magaz ';
var_dump($ob);
echo $ob->get_desc();

$ob = new Product();

var_dump($ob);
echo $ob->get_desc();
?>


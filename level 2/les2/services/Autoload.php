<?php
namespace App\services;
header('Content-type: text/html; charset=utf-8');

class Autoload
{
    private $dir = [
        'modules', 'services'
    ];

    public function loadClass($className)
    {
        echo $className .'<br>';
        $arr = explode('\\',$className);
        $className = $arr[2];
        echo $className .'<br>';
        var_dump($arr);
        foreach ($this->dir as $dir) {

            $file = $_SERVER['DOCUMENT_ROOT'] .
                "/../{$dir}/{$className}.php";
            echo $file .'<br>';
            if (file_exists($file)) {
                include $file;
                break;
        }else {
                echo 'Файл не найден ' . $className .'<br>';}


        }
    }

}
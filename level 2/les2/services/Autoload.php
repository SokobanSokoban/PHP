<?php

class Autoload
{
    private $dir = [
        'modules', 'services'
    ];

    public function loadClass($className)
    {
        foreach ($this->dir as $dir) {
            $file = $_SERVER['DOCUMENT_ROOT'] .
                "/../{$dir}/{$className}.php";
            if (file_exists($file)) {
                include $file;
                break;
            }

        }
    }

}
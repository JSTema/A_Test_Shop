<?php


function __autoload($className)
{
    $arrayPath = [
        '/models/',
        '/components/',
        '/vendor/'
    ];

    foreach ($arrayPath as $path) {
        $path = ROOT . $path . $className . '.php';
        if(is_file($path)) {
            require_once $path;
        }

    }

}
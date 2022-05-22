<?php

use app\common\App;

$config = include "app\\config\\main.php";

session_start();

spl_autoload_register(function($class){
    $path = str_replace("\\","/", $class.'.php');
    if(file_exists($path)) require $path;
});

(new App($config))->run();


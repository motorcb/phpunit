<?php

//require_once './src/Hello.php';
/*
function loader($class)
{
    $file = $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('loader');
*/

function my_autoloader($class) {
    require_once './src/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
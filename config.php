<?php
    $print = function($class){
        if(file_exists('classes/'.$class.'.php')){
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print)
    define('HOST', 'mysql');
    define('DATABASE', 'agenda_bd');
    define('USER', 'root');
    define('PASSWORD', 'root');

?>
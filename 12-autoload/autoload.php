<?php


function app_autoload($class){
    include 'classes/'.str_replace('\\', '/', $class).'.php';
}


spl_autoload_register('app_autoload');
<?php


function app_autoload($class){
    require_once 'classes/'.str_replace('\\', '/', $class).'.php';
}


spl_autoload_register('app_autoload');
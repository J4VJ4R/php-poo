<?php

require_once './configuration.php';

Configuration::$color = "blue";
Configuration::$newsletter = true;
Configuration::$entorno = "localhost";

echo Configuration::$color.'<br/>';
echo Configuration::$newsletter."<br>";
echo Configuration::$entorno."<br>";

$configuration = new Configuration();
$configuration::$color = "red";
echo $configuration::$color;


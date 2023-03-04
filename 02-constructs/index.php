<?php

require_once ('coche.php');

$coche = new Coche("abc-234", "azul", 300, "Mazda");

$coche->setColor("Morado");
var_dump($coche->getColor());
var_dump($coche);
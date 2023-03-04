<?php

require_once ('coche.php');

$coche = new Coche("abc-234", "azul", 300, "Mazda");
$coche1 = new Coche("alj-567", "orange", 300, "Mazda");
$coche2 = new Coche("maz-890", "Purple", 300, "Mazda");
$coche3 = new Coche("añl-379", "green", 300, "Mazda");
$coche4 = new Coche("eoa-132", "pink", 300, "Mazda");
var_dump($coche->getColor());
var_dump($coche1->getColor());

var_dump($coche);
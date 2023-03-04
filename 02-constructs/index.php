<?php

require_once ('coche.php');

$coche = new Coche("abc-234", "azul", 300, "Mazda");
$coche1 = new Coche("nno-112", "Pink", 250, "Ferrari");

echo $coche->showInformation($coche1);

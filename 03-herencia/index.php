<?php

require_once './classes.php';

$informatico1 = new informatico();
$informatico1->setName("Javier");
var_dump($informatico1);

// Creatting designer

$designer = new Designer();
$designer->setName("Carlos");
var_dump($designer);
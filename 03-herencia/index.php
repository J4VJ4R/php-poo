<?php

require_once ('classes.php');

$people1 = new People();
$people1->setName("Mauricio");
var_dump($people1);

//Creatting a new informaticMan with inheritance from People
$informaticMan = new InformaticMan();
$informaticMan->startAction();
$informaticMan->setName("Camila");
$informaticMan->setEight(25);
$informaticMan->languages();
var_dump($informaticMan);

//Creatting a new object named designer1 with inheritance from InformaticMan
$designer1 = new Designer();
$designer1->starProject();
var_dump($designer1);


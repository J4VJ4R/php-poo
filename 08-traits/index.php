<?php

trait utilidades{
    public function getName(){
        echo "<h1>El nombre es: ".$this->name."</h1>";
    }
}

class Car{
    public $name;
    public $brand;

    use utilidades;
}

class User{
    public $name;
    public $lastname;

    use utilidades;
}

$car = new Car();
$car->name = "Ferrari";

$car->getName();

$user = new User();
$user->name = "Carlos";

$user->getName();
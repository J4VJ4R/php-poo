<?php

class car{
    public $placa = "abc-532";
    public $color = "Rojo";
    public $velocidad = 300;
    public $modelo = "mazda";


    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

$car1 = new car();



$car1->setColor("amarillo");
echo "<hr>";
echo "El color de carro 1 es: ".$car1->getColor()."<br>";
echo "El modelo de carro 1 es: ".$car1->getModelo();


echo "<hr>";

$car2 = new car();
$car2->setColor("Verde");
$car2->setModelo("Kia");

echo "el color del coche 2 es: ".$car2->getColor()."<br>";
echo "El modelo de carro 2 es: ".$car2->getModelo()."<br>";

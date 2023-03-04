<?php

class Coche{
    public $placa;
    private $color;
    protected $velocidad;
    public $modelo;

    public function __construct($placa, $color, $velocidad, $modelo){
        $this->placa = $placa;
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->modelo = $modelo;
    }

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





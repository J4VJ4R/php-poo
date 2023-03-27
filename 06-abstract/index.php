<?php

abstract class Computer{
    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Computer{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender()
    {
        $this->encendido = true;
    }
}

$computer = new PcAsus();
$computer->arrancarSoftware();
$computer->apagar();

var_dump($computer);
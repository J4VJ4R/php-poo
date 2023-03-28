<?php

interface Computer{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function reconocerUSB();
}

class iMac implements Computer{
    public $modelo;
    

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function encender(){

    }
    public function apagar(){

    }
    public function reiniciar(){

    }
    public function desfragmentar(){

    }
    public function reconocerUSB(){
        
    }
}

$maquintos = new iMac();
$maquintos->setModelo("MackBook pro  2019");
echo $maquintos->getModelo();
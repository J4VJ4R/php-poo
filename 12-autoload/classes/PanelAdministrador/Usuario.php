<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Juli";
        $this->email = "julio@gmail.com";
    }
    
}
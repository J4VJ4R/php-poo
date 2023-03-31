<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "javier";
        $this->email = "j@gmail.com";
    }
    
}
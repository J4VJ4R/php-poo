<?php
namespace MisClases;

class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct(){
        $this->nombre = "Juegos";
        $this->descripcion = "Blog de calificación de juegos de rol";
    }
}
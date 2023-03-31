<?php
require_once 'autoload.php';
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;


    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
   
}
$usuario = new UsuarioAdmin();
var_dump($usuario);
$principal = new Principal();
var_dump($principal->usuario);
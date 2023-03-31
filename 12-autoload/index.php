<?php
require_once 'autoload.php';
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
//use PanelAdministrador\Usuario as UsuarioAdmin;

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
   
    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }
    
    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

     /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
    
}
// $usuario = new UsuarioAdmin();
// var_dump($usuario);
$principal = new Principal();
// var_dump($principal->usuario);
$metodos = (get_class_methods($principal));
// Busqueda
$busqueda = array_search("setEntrada", $metodos);
var_dump($busqueda);

//comprobar si existe una clase
$clase = @class_exists('PanelAdministrador\Usuario2');
if($clase){
    echo "<h1>La clase si existe</h1>";
}else{
    echo "<h1>La clase no existe</h1>";


   
}
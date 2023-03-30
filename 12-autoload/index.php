<?php
require_once 'autoload.php';
// require_once './classes/categoria.php';
// require_once './classes/entrada.php';
// require_once './classes/usuario.php';

$usuario = new Usuario();
echo $usuario->nombre."<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;
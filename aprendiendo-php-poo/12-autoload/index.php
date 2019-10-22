<?php

//require_once './autoload.php';

/*
$usuario = new Usuario();
echo $usuario->nombre;

$categoria = new Categoria();
$entrada = new Entrada(); 
 
 */

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new MisClases\Usuario();
        
    }
}

$principal = new Principal();
var_dump($principal->usuario);

?>


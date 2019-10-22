<?php
//Es un paquete que se llama Mis clases
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Victor Manuel";
        $this->email = "vmanuelpm@gmail.com";
    }
}

?>
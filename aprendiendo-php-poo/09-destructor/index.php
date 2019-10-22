<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Victor Manuel";
        $this->email = "manu@gmail.com";
        echo 'Instancia del objeto creada <br/>';
    }
    
    public function __toString() {
        return "holaaaa";
    }

        public function __destruct() {
        echo '<br/> Instancia del objeto destruida';
    }
}

$usuario = new Usuario();


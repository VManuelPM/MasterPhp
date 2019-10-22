<?php

class database{
    public static function contectar(){
        $conexion = new mysqli("localhost","root","","notas_master");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>
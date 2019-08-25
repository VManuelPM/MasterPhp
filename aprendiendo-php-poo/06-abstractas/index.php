<?php

abstract class Ordenador{
    
    public $encendido;


    abstract public function encender();
    
    public function apagar(){
        $this->encendido=FALSE;
    }
    
    
}

class PcAsus extends Ordenador{
    public $software;
    
    public function arrrancarSoftware(){
        $this->software=TRUE;
    }

    public function encender() {
        $this->encendido=TRUE;
    }

}

$ordenador = new PcAsus;
$ordenador ->arrrancarSoftware();
$ordenador ->encender();
$ordenador ->apagar();
var_dump($ordenador);

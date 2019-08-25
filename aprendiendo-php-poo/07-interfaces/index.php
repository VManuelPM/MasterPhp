<?php

//Una Interfaz es un contrato donde definimos que metodos y en que orden van a estar en una clase

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();
    
    public function detectarUSB();
}

class iMac implements Ordenador{
    public $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function apagar() {
        
    }

    public function desfragmentar() {
        
    }

    public function detectarUSB() {
        
    }

    public function encender() {
        
    }

    public function reiniciar() {
        
    }

}

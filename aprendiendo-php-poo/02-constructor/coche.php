<?php

//caracteristicas parecidas
class Coche {

    //Atributos o propiedades (Variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //Métodos o funciones - Acciones que hace un objeto
    public function getColor() {
        //El this significa busca en esta clase el atributo X
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
    
    public function mostrarInformacion(Coche $miObjeto){
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "Color: ".$miObjeto->color;
        $informacion .= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/> Velocidad: ".$miObjeto->velocidad;
        
        return $informacion;
    }

}

//Fin de la clase

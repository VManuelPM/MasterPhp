<?php

//PROGRAMACIÓN ORIENTADA A OBJETOS POO
//DEFINIR UNA CLASE - Una clase es un molde para crear mas objetos con 
//caracteristicas parecidas
class Coche {

    //Atributos o propiedades (Variables)
    
    //Public: se puede acceder desde cualquier lugar, dentro de la clase actual
    //dentro de las clases que hereden esta clase o fuera de la clase
    public $color = "Rojo";
    
    //Protected: Se puede acceder desde la clase que los define y desde clases
    //que hereden esta clase
    protected $marca = "Ferrari";
    
    //Private: Unicamente se puede acceder desde esta clase
    private $modelo = "Aventador";
    
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

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

}

//Fin de la clase
//CREAR UN OBJETO o INSTANCIAR LA CLASE
$coche = new Coche();

//USAR LOS METODOS
echo $coche->getVelocidad();

echo '<br/>';

$coche->setColor("Amarillo");
echo "El color del coche  es " . $coche->getColor();

$coche->acelerar();
echo '<br/>';
echo $coche->getVelocidad();
?>
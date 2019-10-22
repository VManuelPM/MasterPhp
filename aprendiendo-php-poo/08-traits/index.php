<?php

//Trait, nos permite definir una serie de metodos para compartirla en la clases

trait Utilidades {

    public function mostrarNombre() {
        echo 'El nombre es ' . $this->nombre . '<br>';
    }

}

class Coche {

    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {

    public $nombre;
    public $apellido;

    use Utilidades;
}

class Videojuego {

    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona->nombre = "Kyun son";
$persona->mostrarNombre();

$videojuego->nombre = "GTA";
$videojuego->mostrarNombre();


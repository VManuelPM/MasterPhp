<?php

/*
  FUNCIONES: Conjunto de instrucciones agrupadas bajo un nobmre concreto
  y que pueden reutilizarse solamente invocando a la funcion,
  (es decir un metodo de toda la vida)

  function nombreMiFuncion($parametrosOpcionales){
  Bloque de instrucciones
  }

 */

//Ejemplo 1 
function muestraNombres() {
    echo 'Manuelito <br/>';
    echo 'Moreno <br/>';
    echo 'Kym son hyum <br/>';
    echo 'Eli <br/>';
}

//Invoca función
muestraNombres();

//EJEMPLO 2
function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero $numero</h3>";
    for ($i = 0; $i <= 10; $i++) {
        echo $numero . 'x' . $i . '=' . ($numero * $i) . '<br/>';
    }
}

tabla(5);

//EJEMPLO 3
function calculadora($n1, $n2) {
    echo '<hr/>';
    echo 'Suma: ' . ($n1 + $n2) . '<br/>';
    echo 'Resta: ' . ($n1 - $n2) . '<br/>';
    echo 'Multiplicacion: ' . ($n1 * $n2) . '<br/>';
    echo 'Division: ' . ($n1 / $n2) . '<br/>';
}

calculadora(10, 2);
calculadora(40, 20);

//-------------------------------------------------------------------------
//PARAMETROS OPCIONALES 
function calculadoraOpcional($n1, $n2, $negrita = FALSE) {
    echo '<hr/>';
    echo 'Suma: ' . ($n1 + $n2) . '<br/>';
    echo 'Resta: ' . ($n1 - $n2) . '<br/>';
    echo 'Multiplicacion: ' . ($n1 * $n2) . '<br/>';
    echo 'Division: ' . ($n1 / $n2) . '<br/>';
}

calculadoraOpcional(100, 2);

//FUNCION CON RETORNO
function devuelveNombre($nombre) {
    return "El nombre es $nombre <br/>";
}

echo devuelveNombre("Elizabeth");

//FUNCIONES DENTRO DE OTRAS

function getNombre($nombre) {
    $texto = "El nombre es $nombre";
    return $texto;
}

function getApellido($apellidos) {
    $texto = " y el apellido es $apellidos <br/>";
    return $texto;
}

function devuelveNombreApellido($nombre, $apellidos) {
    $texto = getNombre($nombre) . getApellido($apellidos);
    return $texto;
}

echo devuelveNombreApellido('Elizabeth', 'Liones');
?>
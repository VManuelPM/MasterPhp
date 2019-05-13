<?php

/*
  CONDICIONALES
  Operadores de comparacion:
 * == exactamente igual
 * === identico tiene que ser el mismo tipo de dato
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que

  Operadores Logicos:
 * && and
 * || or
 * ! not
 * and, or
 */

$color = 'rojo';

if ($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}

echo '<br />';

$year = 2019;

if ($year != 2019) {
    echo 'Estamos melos';
} else {
    echo 'Paila niño';
}

echo '<br />';

$edad = 18;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad) {
    echo 'Eres mayor de edad';
} else {
    echo 'Eres menor de edad crio';
}

echo '<br />';

//Ejemplo Else if
$dia = 3;
if ($dia == 1) {
    echo 'Es Lunes';
} elseif ($dia == 2) {
    echo 'Es martes';
} elseif ($dia == 3) {
    echo 'Es Miercoles';
}

//Ejemplo Varias condiciones
$edad1 = 18;
$edad2 = 64;

echo '<hr />';

if ($edad1 >= 18 && $edad2 <= 64) {
    echo 'Puede trabajar';
} else {
    echo 'No puede trabajar';
}


echo '<hr />';

//Switch 
$dia = 4;
switch ($dia) {
    default :
        echo 'Soy el domingo';
        break;
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
}

echo '<hr />';


//GOTO
goto marca;

echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

marca:
echo 'me he saltado 4 echos';

?>
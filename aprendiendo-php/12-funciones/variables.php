<?php

/*
Variables locales: Son las que se declaran dentro de una funcion y no pueden ser
 usadas fuera de la función, solo estan disponibles dentro. A no ser que haga un
 return.
 * 
Variables Globales: Son las que se declaran fuera de una funcion y estan 
 disponibles dentro y fuera de las funciones.
*/

//Variable Global
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres';

echo  $frase;

function holaMundo(){
    //con global decimos que es una variable global la que vamos a usar
    global $frase;
    echo $frase;
    
    $year = 2019;
    echo $year;
    
    return $year;
}

echo  '<hr/>'. holaMundo();

//------------------------------------------------
//FUNCIONES VARIABLES

function buenosDias(){
    return 'Hola, Buenos días';
}

function buenasTardes(){
    return "Hey, que tal ha ido la tarde";
}

function buenasNoches(){
    return 'Buenas noches, que duerma';
}

$horario = "buenasNoches";
echo '<hr/>'.$horario();

$horario2 = "Tardes";
$mifuncion = "buenas".$horario2;
echo '<hr/>'.$mifuncion();

//-------------------------------------------------------


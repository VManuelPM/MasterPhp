<?php

/*

 */

//Debugggear
$nombre = 'pepe';
var_dump($nombre);

//Fechas
echo '<br/>';
echo date('d-M-y');
echo '<br/>';
echo time();

//Matematicas
echo '<br/>';
echo 'numero pi: ' . pi();
echo '<br/>';
echo 'raiz cuadrada: ' . sqrt(10);
echo '<br/>';
echo 'numero aleatorio: ' . rand(10, 40);
echo '<br/>';
echo 'redondeo: ' . round(7.89655, 2);

//Mas funciones generales
echo '<br/>';
echo 'Obtiene tipo de variable ' . gettype($nombre);
echo '<br/>';

//Verifica si es de algun tipo is_
if (is_string($nombre)) {
    echo 'Esa variable es un String';
}

echo '<br/>';

//Comprar si existe algo
if (isset($edad)) {
    echo 'existe esta variable';
} else {
    echo 'No existe esta variable';
}

//Trim borra espacios
echo '<br/>';
$frase = "     hola        ";
echo trim($frase);

echo '<br/>';

//Eliminar variables o indicies de arrays
$year = 2020;
unset($year);

//Comprar si una variable esta vacia, es cero o no existe
$texto = "";
if (empty($texto)) {
    echo 'esta vacia la variable';
}

echo '<br/>';

//Nos calcula cuantos caracteres tiene una cadena de texto
$cadena = "Manuel";
echo 'La cadena tiene : ' . strlen($cadena);

echo '<br/>';

//Strpost encuentra en un string un caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");

echo '<br/>';

//Reemplazar contenido de un string
$frase = str_replace('vida', 'moto', $frase);
echo $frase;

echo '<br/>';

//mayusculas y minisculas
echo strtolower($cadena);
echo '<br/>';
echo strtoupper($cadena);
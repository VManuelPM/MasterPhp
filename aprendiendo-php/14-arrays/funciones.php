<?php

$cantantes = ['Michael','Drake','Mago de Oz', 'Alfredo'];
$numeros = array(1,2,5,8,9,6,4);

//asort = ordena por orden alfabetico
asort($cantantes);
var_dump($cantantes);

echo '<hr/>';

//arsort = ordena alfabetico inverso
arsort($cantantes);
var_dump($cantantes);

echo '<hr/>';

//sort = para ordenar tambien numeros
sort($numeros);
var_dump($numeros);

echo '<hr/>';

//Añadir elementos a un array
$cantantes[] = 'Snoop dog';
array_push($cantantes, 'Manuel medrano');
var_dump($cantantes);

echo '<hr/>';

//Elimina cantane del array

//array_pop = quita el ultimo elemento que exista
array_pop($cantantes);
var_dump($cantantes);

echo '<hr/>';

//Quita indice en concreto
unset($cantantes[2]); 
var_dump($cantantes);

echo '<hr/>';

//Sacar elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo '<hr/>';

// Dar la vuelta a un aray
var_dump(array_reverse($numeros));

echo '<hr/>';

//Buscar dentro de un array
$resultado = array_search('Mago de Oz', $cantantes);
var_dump($resultado);

echo '<hr/>';

//Contar numeros de elementos 
echo count($cantantes);
//echo sizeof($cantantes);

?>
<?php

/*
  Hacer un programa que tenga un array con 8 numeros y :
 * recorrerlo y mostrarlo
 * Ordenarlo y mostrarlo
 * Mostrar su longitud 
 * Buscar algún elemento.
 */

$numeros = array(1, 2, 8, 18, 45, 20, 25, 69, 47);

function mostrarArray($numeros) {
    
    $resultado = "";
    
    foreach ($numeros as $n) {
        $resultado .= $n . '<br/>';
    }
    return $resultado;
}

echo mostrarArray($numeros);
echo '<hr/>';

echo count($numeros);

echo '<hr/>';
sort($numeros);
echo mostrarArray($numeros);

echo '<hr/>';

var_dump(array_search(69, $numeros));
?>


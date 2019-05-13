<?php

/* 
 Programa que añada valores a un arary mientras que su longitud sea menor a 120
 * y mostrarlo en pantalla.
 */

$arrayGlobal = array();

function añadirArray(){
    global $arrayGlobal;
    for($i = 0; $i<=120; $i++){
      array_push($arrayGlobal, $i);
   }
   return $arrayGlobal;
}

function mostrarArray($array){
    $arrayRetorno = "";
    foreach ($array as $a) {
        $arrayRetorno .= $a . '<br/>';
    }
    return $arrayRetorno;
}

añadirArray();
echo mostrarArray($arrayGlobal);

?>
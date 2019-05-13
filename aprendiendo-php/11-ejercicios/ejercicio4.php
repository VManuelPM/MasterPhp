<?php

/* 
Recorrer dos numeros por la url con get, hacer operaciones tipo calculadora con esos numeros
 */

if(isset($_GET['n1']) && isset($_GET['n2'])){
    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];
    echo 'Sus números son: ' . $n1 . ' Y ' . $n2 . '<br/>' ;
    echo 'Suma: ' . ($n1+$n2) . '<br/>';
    echo 'Resta: ' . ($n1-$n2) . '<br/>';
    echo 'Multipliacion: ' . ($n1*$n2) . '<br/>';
    echo 'División: ' . ($n1/$n2) . '<br/>';
}


?>

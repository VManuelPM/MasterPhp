<?php

/*
programa que muestre todos los numeros impares entre dos numeros que llegen por get
*/


if(isset($_GET['n1']) && isset($_GET['n2'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
   
   for($i = $n1; $i<= $n2; $i++){
    if(($n1<=$n2) && ($n1%2<>0)){
        echo $n1 . '<br/>';    
    }
    $n1++;
   } 
}
?>


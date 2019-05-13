<?php
/*
 programa que muestre todos los numeros entre dos numeros que llegen por get
*/

if(isset($_GET['n1']) && isset($_GET['n2'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
   
   do{
   echo $n1 . '<br/>';
   $n1++;
   }while($n1<=$n2); 
}
?>
<?php

/* 
Crear una sesion que aumente su valor en uno o disminuya en uno en función 
 * de si parametro get counter esta a uno o a cero.
 */

session_start();

if(!isset($_SESSION["numero"])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
}else{
    $_SESSION['numero']--;
}
?>
<h1>El valor de la sesión es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar Valor</a>
<a href="ejercicio1.php?counter=0">Disminuir Valor</a>
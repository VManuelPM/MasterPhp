<?php

//Conectar a la base de datos 
$conexion  = mysqli_connect("localhost", "root","", "phpmysql");

//Comprobar la conexion
if(mysqli_connect_error()){
    echo 'La conexion ha fallado: ' . mysqli_connect_error();
}else{
    echo 'conectado correctamente';
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query  = mysqli_query($conexion, "SELECT * FROM notas");
while($nota = mysqli_fetch_assoc($query)){
    echo $nota['titulo'];
    echo $nota['descripcion'];
}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(null,'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert  = mysqli_query($conexion, $sql);

echo '<hr>';

if($insert){
    echo 'Datos insertados correctamente';
}else{
    echo 'Error: ' . mysqli_error($conexion);
}


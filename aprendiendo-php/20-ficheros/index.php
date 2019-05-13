<?php

/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");


//Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido.'<br/>';
}

// Escribir 
fwrite($archivo, "***soy un texto metido desde PHP***");

//Cerrar archivo 
fclose($archivo);
 
 */

/*
//Copiar ficheros
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error al copiar");
*/

//Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');


//Eliminar fichero
//unlink('archivito_recopiadito.txt') or die('Error al borrar');

if(file_exists("fichero_texto.txt")){
    echo 'Existe';
}
 
?>

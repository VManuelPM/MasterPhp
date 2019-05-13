<?php

/*
ARRAYS
 un array es una colección de datos/valores, bajo un unico nombre.
 para acceder a esos valores se puede usar un indice numerico o alfanumerico 
 */

$pelicula = 'Batman';
$peliculas = array('Batman','Spiderman', 'El señor de los anillos');
$cantantes = ['Michael','Drake','Mago de Oz'];

//Arrays asociativos -----------------------
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'manu.com.kr'
);

var_dump($personas['web']);
//-----------------------------------------

/*
echo $peliculas[0];
echo '<br/>';
echo $cantantes[2];*/

// FOR - Recorrer arreglo
echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for($i=0;$i<count($peliculas);$i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

//FOREACH - Recorrer arreglo
echo '<h1>Listado de Cantantes</h1>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

//Array Multidimensional
//es un array con otro array dentro

$contactos = array(
    array(
      'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
      'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
      'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com'
    )
);

echo $contactos[1]['nombre'];
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}


?>
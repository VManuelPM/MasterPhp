<?php

/*Bucle While
//Estructura de control que itera o repite la ejecucion de una serie de
instrucciones tantas veces sea necesario.

    while(condicion){
        Instrucciones
        
  }

*/
$numero = 0;
while ($numero <= 50){
    echo $numero . ',';
    $numero++;
}
echo '<hr />';

//Tabla de multiplicar 
// isset comprueba  si existe
if(isset($_GET['numero'])){
    //Cambia tipo de dato con el cast
    $numero = (int) $_GET['numero'];
}
else{
    $numero = 1;
}
var_dump($numero);

echo '<h1> Tabla de Multiplicar del número ' . $numero . '</h1>';
$contador = 0;
while ($contador<=10){
    echo "$numero x $contador = " . ($numero*$contador) . "<br/>";
    $contador++;
}

echo '<hr />';

/*DO WHILE
do{
    Bloque de instruccion
}while(condicion);*/

$edad = 17;
$contador = 1;
do{
    echo 'Tienes acceso al bar ' . $contador . '<br/>';
    $contador++;
}while ($edad >=18 && $contador <=10);

?>


<?php
require './coche.php';

$coche = new Coche("Amarrillo", "Chevrolet", "Spark GT", 150, 200, 4);

//var_dump($coche);

echo $coche->mostrarInformacion($coche);
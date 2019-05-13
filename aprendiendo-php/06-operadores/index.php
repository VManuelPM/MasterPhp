<?php

//Operadores aritméticos
$numero1 = 55;
$numero2 = 33;

echo 'Suma: ' . ($numero1 + $numero2) . '<br/>';
echo 'Resta: ' . ($numero1 - $numero2) . '</br>';

//Operadores de incremento y Decremento
$year = 2018;
//ejecuta echo y después el incremento
echo $year++ . '<br/>';
echo $year . '<br/>';
//ejecuta incremento y después el echo
echo ++$year . '<br/>';
echo $year . '<br/>';

//Operadores de asignación
$edad = 55;

//esto es igual a decir $edad = $edad+5;
echo ($edad+=5).'<br/>';

//esto es igual a decir $edad = $edad-5;
echo ($edad-=5).'<br/>';

//esto es igual a decir $edad = $edad/5;
echo ($edad/=5).'<br/>';



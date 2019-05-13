<?php

/* 
 Crear un script en PHP que tenga 4 variables, una de tipo array, otra de tipo String
 * otra int y otra boolean y que imprima un mensaje segun el tipo de variable 
 * que sea. 
 */

$v1 = "";
$v2 = 0;
$v3 = TRUE;
$v4 = array();

if(is_string($v1)){
    echo 'Soy String <br/>';
}else{
    echo 'No soy string <br/>';
}

if (is_bool($v3)) {
    echo 'Soy boolean <br/>';
}else{
    echo 'No soy boolean <br/>';
}

if(is_int($v2)){
    echo 'Soy int <br/>';
}
else{
    echo 'No soy int <br/>';
}

if(is_array($v4)){
    echo 'Soy boolean <br/>';
}
else{
    echo 'No soy boolean';
}

?>
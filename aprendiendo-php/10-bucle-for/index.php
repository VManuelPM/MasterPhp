<?php

/* 
FOR
 for(variable contador, condicion, incremento){
    bloque de instrucciones
}
*/

$resultado = 0;

for($i = 0;  $i <= 100; $i++){
    $resultado += +$i;
    if($resultado == 45){
        echo 'No se puede mostrar';
        break;
    }
}

echo $resultado;


?>

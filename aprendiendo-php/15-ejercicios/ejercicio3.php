<?php

/*
  Programa que compruebe si una variable esta vacia y si esta vacia, llenarla
 * con texto en minisculas y mostrarlo en mayusuculas en negrita.
 */

$variable = "";

if (empty($variable)) {
    $variable = strtolower('ESCRIBI EN MAYUSUCULAS');
    echo $variable . '<br/>';
    $variable = strtoupper($variable);
    echo 'Ahora en mayusculas de nuevo y negrita: <strong>' . $variable . '</strong>';
} else {
    echo 'No estoy vacia';
}
?>
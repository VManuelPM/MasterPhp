<?php
/*
  Imprimir por pantalla todas las tablas de multiplicar
 * y mostrartas en una tabla html
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Tabla</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <?php
                $c=0;
                while($c<=10){
                echo '<th>Tabla del '.$c.' </th>';
                $c++;
                }
                ?>
            </tr>
            <tr>
                <?php
                $contador=0;
                while ($contador<=10){
                echo '<td>';
                $i = 0;
                while ($i <= 10) {
                    echo $contador .'x' . $i . '=' . ($contador * $i) . '<br />';
                    $i++;
                    
                }
                echo '</td>';
                $contador++;
                }
                ?>    
            </tr>
        </table>
    </body>

</html>

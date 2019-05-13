<?php require_once './ejercicio5.php'; ?>
<!DOCTPYE HTML>
<html lang="es">
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <table border="1">
            <?php
            $longitud = count($arrayMultiple);
            $categorias = array_keys($arrayMultiple);
            echo '<tr>';
            foreach ($categorias as $a) {
                echo '<th>' . $a . '</th>';
            }
            
            foreach ($arrayMultiple as $item) {
                echo '<tr>';
                foreach ($item as $k => $v) {
                    echo '<td>' . $v['accion']. '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>

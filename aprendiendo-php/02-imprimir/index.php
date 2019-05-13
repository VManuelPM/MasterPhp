<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master PHP</title>
    </head>
    <body>
        <h1>MASTER PHP</h1>

        <?= 'Este es un echo recortado'; ?>

        <?php
        // Titular de la sección
        echo '<h3>Listado de Videojuegos:</h3>';

        echo '<ul>'
        . '<li>GTA</li>'
        . '<li>FIFA</li>'
        . '<li>Path Of Exile</li>'
        . '</ul>';
        
        //Parrafo explicativo
        echo '<p>' . 'Esta es toda' . '-' . 'la lista' . '</p>';
        ?>
    </body>
</html>

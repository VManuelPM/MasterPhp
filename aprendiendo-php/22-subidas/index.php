<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir Imagenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="Enviar" />
        </form>

        <h1>Listado de Imagenes</h1>
        <?php
        $gestor = opendir('./images');
        if ($gestor):
            while (($image = readdir($gestor)) !== FALSE):
                if ($image != '.' && $image != '..'):
                    echo "<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;
        endif;
        ?>
    </body>
</html>
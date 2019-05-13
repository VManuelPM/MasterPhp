<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Validación de formularios</title>
    </head>
    <body>
        <h1>Validar Formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red"> Introduce todos los datos en todos los campos del formulario </strong>';
                }
            }
        ?>
        
        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/><br/>
            
            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos"  required="required" pattern="[A-Za-z]+"/><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="email">Email</label><br/>
            <input type="email" name="email" required="required"/><br/>
            
            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required"/><br/>
            
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
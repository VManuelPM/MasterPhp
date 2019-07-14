<?php require_once 'includes/helpers.php'; ?>
<!--Sidebar - Barra Lateral-->
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text"  name="email" id="email" />
            <label for="password">Password</label>
            <input type="password"  name="password" id="password" />
            <input type="submit" value="Entrar"/>
        </form>
    </div>

    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text"  name="nombre" id="nombre" />
            <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text"  name="apellidos" id="apellidos" />
            <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="text"  name="email" id="email" />
            <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

            <label for="password">Password</label>
            <input type="password"  name="password" id="password" />
            <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

            <input type="submit" value="Registrarse" name="submit"/>
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>

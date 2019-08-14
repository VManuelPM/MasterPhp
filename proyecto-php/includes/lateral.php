
<!--Sidebar - Barra Lateral-->
<aside id="sidebar">

    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
            <!-- Botones  -->
            <a href="crear-entradas.php" class="boton boton-verde">Crear Entradas</a>
            <a href="crear-categoria.php" class="boton">Crear Categoria</a>
            <a href="mis-datos.php" class="boton boton-naranja">Mis Datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesión</a>
        </div>
    <?php endif; ?> 
    
     <?php if (isset($_SESSION['error_login'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['error_login'];?>
        </div>
    <?php endif; ?> 

    <?php if (!isset($_SESSION['usuario'])): ?>
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
        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito"> 
                <?= $_SESSION['completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>
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
    <?php endif;?>
</aside>

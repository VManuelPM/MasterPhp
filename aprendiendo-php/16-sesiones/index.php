<?php

/*
 Una SESION almacena y persiste datos del usuario mientras que navega en un sitio web
  hasta que cierra sesion o cierra el navegador, se guardan en el servidor web
 */

// Iniciar la sesión
session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//Variable de sesión
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal.'<br/>';

?>
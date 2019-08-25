<?php

require_once './configuracion.php';

ConfiguracionStatic::setColor("blue");
ConfiguracionStatic::setEntorno("localhost");
ConfiguracionStatic::setNewsletter(true);

echo ConfiguracionStatic::$color . "<br/>";
echo ConfiguracionStatic::$entorno . "<br/>";
echo ConfiguracionStatic::$newsletter . "<br/>";
<?php

require './clases.php';


$persona = new Persona();

$informatico = new Informatico();
$informatico->setAltura(1.9);
$informatico->sabeLenguajes("HTML, CSS, PHP, JS");

var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);
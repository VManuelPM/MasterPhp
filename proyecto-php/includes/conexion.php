<?php
// Conexion a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "blog_master";

$db = mysqli_connect($host, $user, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");


//INICIAR SESION
if(!isset($_SESSION)){
session_start();
}


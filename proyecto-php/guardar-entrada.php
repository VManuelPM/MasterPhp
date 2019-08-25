<?php

if (isset($_POST)) {

    //Conexion a la BD
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_escape_string($db, $_POST['titulo']) : FALSE;
    $descripcion = isset($_POST['descripcion']) ? mysqli_escape_string($db, $_POST['descripcion']) : FALSE;
    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : FALSE;
    $usuario = $_SESSION['usuario']['id'];

    //VALIDACIÖN
    $errores = array();

    if (empty($titulo)) {
        $errores['titulo'] = "El titulo no es válido";
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = "La descripción no es válida";
    }


    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['titulo'] = "La categoria no es válida";
    }

    if (count($errores) == 0) {
        if (isset($_GET['editar'])) {
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria " .
                    " WHERE id= $entrada_id AND usuario_id = $usuario_id";
        } else {
            $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        }

        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    } else {
        $_SESSION["errores_entrada"] = $errores;
        if (isset($_GET['editar'])) {
            header("Location: editar-entrada.php?id=".$_GET['editar']);
        } else {
           header("Location: crear-entradas.php"); 
        }
    }
}
?>
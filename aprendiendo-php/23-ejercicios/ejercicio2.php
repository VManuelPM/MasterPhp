<?php

/* 
 1.Tiene que tener una funcion
 2. La funcion tiene que validar un email con filter_var
 3. Usar la funcion y recoger una variable por get y validarla
 4. Mostrar el resultado
 */

if(isset($_GET['email'])){
    $email = $_GET['email'];
    echo valida($email);
}

function valida($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "es correo";
    }else{
        return 'No es correo sorry :(';
    }
}


?>
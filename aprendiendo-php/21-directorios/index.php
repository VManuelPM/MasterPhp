<?php

if(!is_dir('carpeta')){
mkdir('carpeta',0777) or die("No se puede crear la carpeta");
}else{
    echo 'Ya existe la carpeta';
}

//Borrar directorio
//rmdir('carpeta'); 
echo '<hr/>';
if($gestor = opendir('./carpeta')){
    while (FALSE !== ($archivo = readdir($gestor))){
        if($archivo !='.' && $archivo !='..'){
        echo $archivo.'<br/>';
        }
    }
}

?>
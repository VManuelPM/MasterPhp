<?php

Class NotaController{
    public function listar(){
        //Cargar Modelo
        require_once 'models/nota.php';
        
        //Logica acción Controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodo('notas');
        
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear(){
          //Cargar Modelo
        require_once 'models/nota.php';
        
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("descripcion de mi nota");
        $guardar = $nota->guardar();
         
        header("Location: index.php?controller=Nota&action=listar");
    }
    
    public function borrar(){
        
    }
    
}

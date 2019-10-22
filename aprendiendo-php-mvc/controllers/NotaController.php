<?php

Class NotaController{
    public function listar(){
        //Cargar Modelo
        require_once 'models/nota.php';
        
        //Logica acción Controlador
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola_Mundo PHP MVC");
       
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear(){
        
    }
    
    public function borrar(){
        
    }
    
}

<?php
require_once 'config/database.php';

class ModeloBase {
    
    public $db;
    
    function __construct() {
        $this->db = database::contectar();
    }

    public function conseguirTodo($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }

}

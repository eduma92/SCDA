<?php

/*
  Este archivo se encarga de conectar mi aplicación a mi
  base de datos en mysql
 */

class Conexion {
    public $conexion;
    
    function __construct() {
        $this->conexion = new mysqli();
    }

    function conectar() {
         $this->conexion->connect("localhost", "root", '', "sca");
        if ($this->conexion->connect_error) {
            die("No hubo conexión: " . $this->conexion->connect_error);
        }
    }
    
    function getQuery($sentencia){
        $result= $this->conexion->query($sentencia);
        return $result;
    }
    
    
    public function __destruct() {
        
    }
    
    public function cerrar(){
       $this->conexion->close();
    }

}

?>
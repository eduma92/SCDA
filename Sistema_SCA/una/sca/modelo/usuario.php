<?php
include_once 'conexion.php';

class Usuario{
  
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $tipo;
    public $equipo;
    public $cedula;
    public $password;
    public $conec;
    
    public function __construct($nombre, $apellido1, $apellido2, $cedula, $password,$tipo, $equipo) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->tipo = $tipo;
        $this->equipo = $equipo;
        $this->cedula = $cedula;
        $this->password = $password;
    }

    public function validaIngreso($sentenciaSQL){
        if(empty($this->nombre && $this->apellido1 && $this->apellido2 && $this->tipo && $this->equipo && $this->cedula && $this->password)){
            echo "Campos vacios";
    }else{
        $this->registraUsuario($sentenciaSQL);
    }
        
    }
    
    public function registraUsuario($sentenciaSQL){
        $conector = new Conexion();
        $conector->conectar();
        $result=$conector->conexion->query($sentenciaSQL);
        if($result){
            echo 'Usuario ingresado correctamente';
        }else{
            echo "recibe su configuracion de base de datos";     
        }
        
    }
    
 
   
}
    


   
      
    
    
            
            
            
            
    
    
    




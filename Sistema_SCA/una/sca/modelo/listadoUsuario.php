<?php

include 'conexion.php';
 $conector = new Conexion();
 $conector->conectar();

$query = "SELECT cedula, nombre, tipoUsuario, equipo FROM usuario";

 $resultado=$conector->conexion->query($query);

 
?>

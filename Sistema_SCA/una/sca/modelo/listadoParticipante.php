<?php

include 'conexion.php';
session_start();
$Sesion = $_SESSION['tipoUsuario'];
$grup= $_SESSION['equipo'];

 $conector = new Conexion();
 $conector->conectar();

if ($Sesion === "administrador"  || $Sesion == "fisioterapia") {
    $query = "SELECT cedula, nombre, grupo, estado FROM participante ";
} else {
    $query = "SELECT cedula, nombre, grupo, estado FROM participante where grupo = ". "'".$grup."'";
}
 $resultado=$conector->conexion->query($query);


?>
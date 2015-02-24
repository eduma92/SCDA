<?php
error_reporting(0);
session_start();
include_once '../modelo/usuario.php';
$nombre=  filter_input(INPUT_POST, "nombre",FILTER_SANITIZE_SPECIAL_CHARS);
$apellido1=  filter_input(INPUT_POST, "apellido1",FILTER_SANITIZE_SPECIAL_CHARS);
$apellido2=  filter_input(INPUT_POST, "apellido2",FILTER_SANITIZE_SPECIAL_CHARS);
$cedula=  filter_input(INPUT_POST, "cedula",FILTER_SANITIZE_SPECIAL_CHARS);
$password=  filter_input(INPUT_POST, "contrasena",FILTER_SANITIZE_SPECIAL_CHARS);
$tipo=  filter_input(INPUT_POST, "usuario",FILTER_SANITIZE_SPECIAL_CHARS);
$equipo=  filter_input(INPUT_POST, "equipo",FILTER_SANITIZE_SPECIAL_CHARS);

 
 
 $usuario= new Usuario($nombre, $apellido1, $apellido2, $cedula, $password, $tipo, $equipo);
 $sentenciaSQL= "INSERT INTO usuario(nombre, apellido1,apellido2,cedula,password,tipoUsuario,equipo)VALUES('$nombre', '$apellido1','$apellido2','$cedula','$password','$tipo','$equipo')";
 $usuario->validaIngreso($sentenciaSQL);

 ?>
 
 

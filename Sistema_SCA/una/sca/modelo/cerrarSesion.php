<?php
session_start();
error_reporting(0);

$varSesion = $_SESSION['usuario'];

	if($varSesion == null || $varSesion==''){
	
	echo "Error 404, por favor hable con su administrador";
	die();
	
	}

session_destroy(); 
header ('location:../../../index.php');
?>


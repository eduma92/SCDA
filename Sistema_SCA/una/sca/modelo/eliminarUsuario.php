
<?php 
	
	include 'conexion.php';
        $conector = new Conexion();
        $conector->conectar();
	
	$ide=$_GET['cedula'];
	
	$query="DELETE FROM usuario WHERE cedula='$ide'";
	$resultado=$conector->conexion->query($query);
        $conector->cerrar();

	
        
?>

<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
                        <a href="../vista/principal.php">Regresar</a>
			
		</center>
	</body>
</html>
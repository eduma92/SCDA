<?php 
	
	include 'conexion.php';
        $conector = new Conexion();
        $conector->conectar();
	
	$ide=$_GET['cedula'];
	
	$query="Update participante set estado='Inactivo' where cedula='$ide'";
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
				
				<h1>Participante Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Participante</h1>
				
			<?php	} ?>
			<p></p>		
			
                        <a href="../vista/principal.php">Regresar</a>
			
		</center>
	</body>
</html>

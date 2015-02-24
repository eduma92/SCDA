<?php

error_reporting(0);
session_start();
include_once '../modelo/conexion.php';

$user = mysql_real_escape_string($_POST['user']);
$pass = mysql_real_escape_string($_POST['pass']);

$conector = new Conexion();
$conector->conectar();

$sentenciaSQL = "SELECT * FROM usuario where cedula='$user' AND password='$pass' ";


$resultados = $conector->getQuery($sentenciaSQL);
if ($resultados->num_rows < 1) {
    echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
} else {

    while ($registros = $resultados->fetch_array()) {

        $grupo = $registros['equipo'];
        $tipo = $registros['tipoUsuario'];
        $_SESSION["equipo"] = $grupo;
        $_SESSION["usuario"] = $user;
        $_SESSION["tipoUsuario"]=$tipo;
        echo '<script>location.href = "una/sca/vista/principal.php"</script>';
    }
}
?>


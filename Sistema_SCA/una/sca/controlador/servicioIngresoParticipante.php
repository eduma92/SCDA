<?php

error_reporting(0);
session_start();
include_once '../modelo/participante.php';

$nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_SPECIAL_CHARS);
$apellido1 = filter_input(INPUT_POST, "apellido1", FILTER_SANITIZE_SPECIAL_CHARS);
$apellido2 = filter_input(INPUT_POST, "apellido2", FILTER_SANITIZE_SPECIAL_CHARS);
$carnet = filter_input(INPUT_POST, "carnet", FILTER_SANITIZE_SPECIAL_CHARS);
$nacimiento = filter_input(INPUT_POST, "nacimiento", FILTER_SANITIZE_SPECIAL_CHARS);
$cedula = filter_input(INPUT_POST, "cedula", FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_SPECIAL_CHARS);
$habitacion = filter_input(INPUT_POST, "habitacion", FILTER_SANITIZE_SPECIAL_CHARS);
$fax = filter_input(INPUT_POST, "fax", FILTER_SANITIZE_SPECIAL_CHARS);
$cuentaBancaria = filter_input(INPUT_POST, "cuentaBancaria", FILTER_SANITIZE_SPECIAL_CHARS);
$correo = filter_input(INPUT_POST, "correo", FILTER_SANITIZE_SPECIAL_CHARS);
$lectivo = filter_input(INPUT_POST, "lectivo", FILTER_SANITIZE_SPECIAL_CHARS);
$noLectivo = filter_input(INPUT_POST, "noLectivo", FILTER_SANITIZE_SPECIAL_CHARS);
$tipoSangre = filter_input(INPUT_POST, "sangre", FILTER_SANITIZE_SPECIAL_CHARS);
//Informacion universitaria
$faculta = filter_input(INPUT_POST, "facultad", FILTER_SANITIZE_SPECIAL_CHARS);
$escuela = filter_input(INPUT_POST, "escuela", FILTER_SANITIZE_SPECIAL_CHARS);
$nivel = filter_input(INPUT_POST, "nivel", FILTER_SANITIZE_SPECIAL_CHARS);
$carrera = filter_input(INPUT_POST, "carrera", FILTER_SANITIZE_SPECIAL_CHARS);
$beca = filter_input(INPUT_POST, "beca", FILTER_SANITIZE_SPECIAL_CHARS);
$ciclo = filter_input(INPUT_POST, "ciclo", FILTER_SANITIZE_SPECIAL_CHARS);
$creditos = filter_input(INPUT_POST, "creditos", FILTER_SANITIZE_SPECIAL_CHARS);
//Datos personales
$lateralidad = filter_input(INPUT_POST, "lateralidad", FILTER_SANITIZE_SPECIAL_CHARS);
$puesto = filter_input(INPUT_POST, "puesto", FILTER_SANITIZE_SPECIAL_CHARS);
$estatura = filter_input(INPUT_POST, "estatura", FILTER_SANITIZE_SPECIAL_CHARS);
$peso = filter_input(INPUT_POST, "peso", FILTER_SANITIZE_SPECIAL_CHARS);
$IMC = filter_input(INPUT_POST, "IMC", FILTER_SANITIZE_SPECIAL_CHARS);
$tallaCamisa = filter_input(INPUT_POST, "tallaCamisa", FILTER_SANITIZE_SPECIAL_CHARS);
$tallaPantalon = filter_input(INPUT_POST, "tallaPantalon", FILTER_SANITIZE_SPECIAL_CHARS);
$tallaBuzo = filter_input(INPUT_POST, "tallaBuzo", FILTER_SANITIZE_SPECIAL_CHARS);
$calzado = filter_input(INPUT_POST, "calzado", FILTER_SANITIZE_SPECIAL_CHARS);
$fechaIngreso = filter_input(INPUT_POST, "ingreso", FILTER_SANITIZE_SPECIAL_CHARS);
$fechaSalida = filter_input(INPUT_POST, "salida", FILTER_SANITIZE_SPECIAL_CHARS);
$grupo = filter_input(INPUT_POST, "equipo", FILTER_SANITIZE_SPECIAL_CHARS);



$participante = new Participante($nombre, $apellido1, $apellido2, $carnet, $nacimiento, $cedula, $celular, $habitacion, $fax, $cuentaBancaria, $correo, $lectivo, $noLectivo, $tipoSangre, $faculta, $escuela, $nivel, $carrera, $beca, $ciclo, $creditos, $lateralidad, $puesto, $estatura, $peso, $IMC, $tallaCamisa, $tallaPantalon, $tallaBuzo, $calzado, $fechaIngreso, $fechaSalida, $grupo,'ParticipanteActivo');

$sentenciaSQL = "INSERT INTO participante(nombre, apellido1, apellido2, carnet, nacimiento,
            cedula, celular, telefonoHabitacion, fax, cuentaBancaria, correo, lectivo, 
            noLectivo, sangre,facultad,escuela,nivel,carrera,beca,ciclo,creditos,lateralidad,
            puesto,estatura,peso,IMC, tallaCamisa,tallaPantalon,tallaBuzo,
            calzado,ingreso,salida,grupo,estado)VALUES('$nombre', '$apellido1', '$apellido2', '$carnet', '$nacimiento',
            '$cedula', '$celular', '$habitacion', '$fax', '$cuentaBancaria', '$correo', '$lectivo', 
            '$noLectivo', '$tipoSangre','$faculta','$escuela','$nivel','$carrera','$beca','$ciclo','$creditos','$lateralidad',
            '$puesto','$estatura','$peso','$IMC', '$tallaCamisa','$tallaPantalon','$tallaBuzo',
            '$calzado','$fechaIngreso','$fechaSalida','$grupo','ParticipanteActivo')";
$participante->validaIngreso($sentenciaSQL);

?>
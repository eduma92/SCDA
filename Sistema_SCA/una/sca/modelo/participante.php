<?php

include_once 'conexion.php';

class Participante {

    private $nombre;
    private $apellido1;
    private $apellido2;
    private $carnet;
    private $nacimiento;
    private $cedula;
    private $celular;
    private $telefonoHabitacion;
    private $fax;
    private $cuentaBancaria;
    private $correo;
    private $lectivo;
    private $noLectivo;
    private $tipoSangre;
    //Informacion universitaria
    private $faculta;
    private $escuela;
    private $nivel;
    private $carrera;
    private $beca;
    private $ciclo;
    private $creditos;
    //Datos personales
    private $lateralidad;
    private $puesto;
    private $estatura;
    private $peso;
    private $IMC;
    private $tallaCamisa;
    private $tallaPantalon;
    private $tallaBuzo;
    private $calzado;
    private $fechaIngreso;
    private $fechaSalida;
    private $grupo;
    private $estado;

    public function __construct($nombre, $apellido1, $apellido2, $carnet, $nacimiento, $cedula, $celular, $telefonoHabitacion, $fax, $cuentaBancaria, $correo, $lectivo, $noLectivo, $tipoSangre, $faculta, $escuela, $nivel, $carrera, $beca, $ciclo, $creditos, $lateralidad, 
            $puesto, $estatura, $peso, $IMC, $tallaCamisa, $tallaPantalon, $tallaBuzo, $calzado, $fechaIngreso, $fechaSalida, $grupo, $estado
    ) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->carnet = $carnet;
        $this->nacimiento = $nacimiento;
        $this->cedula = $cedula;
        $this->celular = $celular;
        $this->telefonoHabitacion = $telefonoHabitacion;
        $this->fax = $fax;
        $this->cuentaBancaria = $cuentaBancaria;
        $this->correo = $correo;
        $this->lectivo = $lectivo;
        $this->noLectivo = $noLectivo;
        $this->tipoSangre = $tipoSangre;

        $this->faculta = $faculta;
        $this->escuela = $escuela;
        $this->nivel = $nivel;
        $this->carrera = $carrera;
        $this->beca = $beca;
        $this->ciclo = $ciclo;
        $this->creditos = $creditos;

        $this->lateralidad = $lateralidad;
        $this->puesto = $puesto;
        $this->estatura = $estatura;
        $this->peso = $peso;
        $this->IMC = $IMC;
        $this->tallaCamisa = $tallaCamisa;
        $this->tallaPantalon = $tallaPantalon;
        $this->tallaBuzo = $tallaBuzo;
        $this->calzado = $calzado;
        $this->fechaIngreso = $fechaIngreso;
        $this->fechaSalida = $fechaSalida;
        $this->grupo = $grupo;
        $this->estado=$estado;
    }

    public function validaIngreso($sentenciaSQL) {
        if (empty($this->nombre && $this->apellido1 && $this->cedula && $this->lectivo && $this->noLectivo && $this->faculta && $this->escuela && $this->nivel && $this->carrera && $this->ciclo)) {
            echo "Campos vacios";
        } else {
            $this->registraParticipante($sentenciaSQL);
        }
    }

    public function registraParticipante($sentenciaSQL) {
        $conector = new Conexion();
        $conector->conectar();
        $result = $conector->conexion->query($sentenciaSQL);
        if ($result) {
            echo 'Participante ingresado correctamente';
        } else {
            echo "recibe su configuracion de base de datos";
        }
    }

}

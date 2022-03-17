<?php

    require_once("claseJugador.php");

    class Futbol extends Jugador{
        public $Estatura;
        public $Edad;

        function __construct($vrNombre, $vrCelular, $vrCorreo, $vrEstatura, $vrEdad)
        {
            parent::__construct($vrNombre, $vrCelular, $vrCorreo);
            $this->Estatura = $vrEstatura;
            $this->Edad = $vrEdad;

        }

        public function getEstatura(){
            return $this->Estatura;
        }
        public function getDatosPersonales(){
            $arrJugador = array(
                'NOMBRE : '=>$this->Nombre,
                'CELULAR : '=>$this->Celular,
                'CORREO : '=>$this->Correo,
                'ESTATURA : '=>$this->Estatura,
                'EDAD : '=>$this->Edad,
            );
            return $arrJugador;
        }
    }
?>
<?php

    class Jugador{
        public $Nombre;
        public $Celular;
        public $Correo;

        function __construct($vrNombre, $vrCelular, $vrCorreo)
        {
            $this->Nombre = $vrNombre;
            $this->Celular =$vrCelular;
            $this->Correo =$vrCorreo;

        }

        public function getCelular(){
            return $this->Celular;
        }

        public function setCelular($vrCelular){
            return $this->Celular = $vrCelular;
        }

        public function getDatosPersonales(){
            $arrJugador = array(
                'NOMBRE : '=>$this->Nombre,
                'CELULAR : '=>$this->Celular,
                'CORREO : '=>$this->Correo,
                
            );
            return $arrJugador;
        }
    }
?>
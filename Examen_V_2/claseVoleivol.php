<?php

    require_once("claseJugador.php");

    class Voleivol extends Jugador{
        public $Puesto_campo;

        function __construct($vrNombre, $vrCelular, $vrCorreo, $vrP_campo)
        {
            parent::__construct($vrNombre, $vrCelular, $vrCorreo);
            $this->Puesto_campo = $vrP_campo;

        }

/*         public function getEstatura(){
            $this->Estatura;
        } */
        public function getDatosPersonales(){
            $arrJugador = array(
                'NOMBRE : '=>$this->Nombre,
                'CELULAR : '=>$this->Celular,
                'CORREO : '=>$this->Correo,
                'PUESTO CAMPO : '=>$this->Puesto_campo,
                // 'EDAD : '=>$this->Edad,
            );
            return $arrJugador;
        }
    }
?>
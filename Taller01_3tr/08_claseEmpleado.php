<?php

    require_once("08_clasePersona.php");

    class Empleado extends Persona{
        
        public $Sueldo;
        public $Estado;
        
        function __construct($vr_Nombre, $vr_Edad, $vr_Sueldo, $vr_Estado)
        {
            parent::__construct($vr_Nombre, $vr_Edad);
            $this->Sueldo =$vr_Sueldo;
            $this->Estado =$vr_Estado;
        }

    }
?>
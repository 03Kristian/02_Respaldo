<?php

    require_once("08_clasePersona.php");

    $objPersona = new Persona("Cristiano Ronaldo", 32);

    print_r('<pre>');
    print_r($objPersona->getPersona());
    print_r('<pre>');
?>
<?php

    require_once("06_claseElectrodomestico.php");
    require_once("06_subclaseLavadora.php");


    $objcatalogo1 = new Lavadora("LG", 1, 3599000);
    echo "<br>";

    print_r('<pre>');
    print_r($objcatalogo1->getInformacion());
    print_r('<pre>');

    echo "<br>";

    $objcatalogo2 = new Lavadora("Wirpool", 1, 1150000);
    echo "<br>";

    print_r('<pre>');
    print_r($objcatalogo2->getInfoElectrodomestico());
    print_r('<pre>');

?>
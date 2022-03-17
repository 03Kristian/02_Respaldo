<?php
require_once("claseJugador.php");
require_once("claseFutbol.php");
require_once("claseVoleivol.php");

$objJugador =new Jugador("CRISTIANO RONALDO", 30045697008, "RONALDO@HOTMAIL.COM");

echo "<h1> Clase Jugador. ". "</h1>";
print_r('<pre>');
print_r($objJugador->getDatosPersonales());
print_r('<pre>');
echo "<br>";
echo "<h2> Celular del Jugador: ".$objJugador->getCelular()."</h2>";
echo "<br>";
echo "Nuevo numero: ".$objJugador->setCelular(3158945651);

$objJugador1 = new Futbol("Pedro Valencia", 3129565489, "Pedro@gmail.com", 1.75, 23);

echo "<h2> Clase Futbol. ". "</h2>";

print_r('<pre>');
print_r($objJugador1->getDatosPersonales());
print_r('<pre>');
echo "<h2> Estatura del Jugador: ".$objJugador1->getEstatura()."</h2>";
echo "<br>";

$objJugador2 = new Voleivol("Paola Estefany", 3014567890, "PaolaE@hotmail.com", "Colocador ");
echo "<h2> Clase Voleivol. ". "</h2>";
print_r('<pre>');
print_r($objJugador2->getDatosPersonales());
print_r('<pre>');
echo "<br>";
?>
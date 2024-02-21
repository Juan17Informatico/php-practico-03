<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

function verificarPalabra($palabrasArray)
{
    for ($i = 0; $i < count($palabrasArray); $i++) {
        if ($_REQUEST["palabra$i"] == $palabrasArray[$i]) {
            echo "<br>La palabra ingresada es correcta     <br>";
        } else {
            echo "<br>La palabra ingresa es incorrecta, la palabra correcta es: $palabrasArray[$i] <br>";
        }
    }
}

verificarPalabra($palabras);

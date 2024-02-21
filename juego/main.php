<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");



$form = "<form action='analisis.php'>";

for ($i = 0; $i < count($palabras); $i++) {

    $palabrasDesordenadas = [];

    do {
        $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
    } while ($palabrasDesordenadas[$i] == $palabras[$i]);
    $form .= "La palabra " . $palabrasDesordenadas[$i] . " "
        . "<input type='text' name='palabra" . $i . "'>"
        . "<br>";
}

$button = "<button type='submit'> Enviar</button>";

$formCierre = "</form>";

echo $form . $button . $formCierre;

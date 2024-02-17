<?php 

function saludar($nombre, $apellido){
    return "Hola $nombre $apellido, ¿Cómo va tu feo día?";
}

$saludo = saludar("Juan", "Campuzano");
// echo $saludo;

function sumarNumeros($numeros){
    $suma = 0 ;
    foreach($numeros as $numero){
        $suma += $numero;        
    } 
    return $suma;
}

$arr = [1,2,3,4,5];

$nuevoNumero = sumarNumeros($arr);

// echo $nuevoNumero;


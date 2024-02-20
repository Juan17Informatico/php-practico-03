<?php

/**
 * En una escuela están almacenando los juguetes favoritos de los estudiantes de acuerdo a su edad
 * en un lugar específico de la bodega de esta forma:
 *  Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.
 *  Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.
 *  Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.
 *  Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.
 * 
 * Según una lista que contiene las edades de cada estudiante debes validar su edad y mostrar a 
 * través de un mensaje en dónde tendrán que almacenar sus juguetes.
 *   Por ejemplo:
 * 
 * El estudiante con 4 años tendrá sus juguetes en la parte inferior de la bodega.
 * El estudiante con 6 años tendrá sus juguetes en la parte media de la bodega.
 * En estudiante con 10 años tendrá sus juguetes en la parte alta de la bodega.
*/

$listaEstudiantesArray = array(
    "Juan" => 4,
    "Pedrito" => 6,
    "Martina" => 10,
    "Carlos" => false,
);

function puestoEnBodega($valueListaAlumnos){
    $espacioBodega = [];
    foreach($valueListaAlumnos as $student => $year){
        if($year < 5 && $year > 0){
            array_push($espacioBodega, "El estudiante $student con $year años tendrá sus juguetes en la parte inferior de la bodega");
       
        }else if($year >= 5 && $year <= 7){
            array_push($espacioBodega, "El estudiante $student con $year años tendrá sus juguetes en la parte media de la bodega");
     
        }else if($year > 7){
            array_push($espacioBodega, "El estudiante $student con $year años tendrá sus juguetes en la parte alta de la bodega");
      
        }else{
            array_push($espacioBodega, "El estudiante $student no cuenta con registro de su edad, sin embargo, aún tendrá un espacio de almacenamiento en la bodega de al lado.");
    
        }
    }
    return $espacioBodega;
}

$estudiantesEspacioBodega = puestoEnBodega($listaEstudiantesArray);

foreach ($estudiantesEspacioBodega as $value) {
    echo $value . "\n";
}
<<<<<<< HEAD
<?php 

function arbolitoNavidad(){
    $alturaArbol = readline("¿Qué tan grande quiere que sea tu arbol? ");
    for($i = 1; $i <= $alturaArbol; $i++){
        
    }
}
=======
<?php

/**
 *      **Dibuja medio Arbol de Navidad**
 * Dibuja medio árbol de Navidad usando solo asteriscos como se indica en el siguiente ejemplo:
 *ejemplo: 
 *
 **
 ***
 ****
 *****
 */

function dibujarArbol($size)
{
    if ($size < 0) {
        return "Error";
    } else {

        for ($i = 1; $i <= $size; $i++) {

            echo str_repeat("*", $i) . "\n";

        }
    }
}


dibujarArbol(20);
>>>>>>> 6e10252a4acb03ce47606e1603afb5bac45f3be0

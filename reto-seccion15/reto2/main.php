<?php

// Escribe una solución para una tienda donde se requiere encontrar el orden en el cual se publicarán los 
// productos en su página web. Para esto, se debe contar con las dimensiones de cada producto y aquellos más grandes 
// (en ancho y alto) estarán en los primeros lugares, y aquellos más pequeños estarán al final.


$datos = $_REQUEST;

function recibirDatos($datos)
{
    $arrayProductos = [];

    $cantidad = $datos["cantidad"];

    for ($i = 0; $i < $cantidad; $i++) {

        $arrayProductos[] = [
            "producto-" . ($i + 1) => [
                "ancho" => $datos["ancho-" . ($i + 1)],
                "altura" => $datos["altura-" . ($i + 1)],
            ],
        ];
    }

    return $arrayProductos;
}


function ordenProductos($datosOrdenados)
{
    $resultado = [];

    for ($i = 0, $j = 1; $i < count($datosOrdenados); $i++, $j++) {

        // var_dump($datosOrdenados[$i]["producto-$j"]);

        $ancho = (int) $datosOrdenados[$i]["producto-$j"]["ancho"];
        $altura = (int) $datosOrdenados[$i]["producto-$j"]["altura"];



        $resultado[] = [
            "producto-$j" => ($ancho * $altura),
        ];
    }

    return $resultado;
}

function ordenarProductos($productos)
{

    for ($i = 0, $j = 1; $i < count($productos); $i++, $j++) {

        $result = $productos[$i]["producto-$j"];
        echo "Producto $j: " . $result . "<br>";
    }
}




$datosOrdenados = recibirDatos($datos);
$productosOrdendados = ordenProductos($datosOrdenados);
ordenarProductos($productosOrdendados);

// print_r($datos);
// echo count($datos);

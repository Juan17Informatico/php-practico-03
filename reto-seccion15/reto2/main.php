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


function calcularProductos($datos)
{
    $resultado = [];

    for ($i = 0, $j = 1; $i < count($datos); $i++, $j++) {

        // var_dump($datosOrdenados[$i]["producto-$j"]);

        $ancho = (int) $datos[$i]["producto-$j"]["ancho"];
        $altura = (int) $datos[$i]["producto-$j"]["altura"];



        $resultado[] = [
            "producto-$j" => ($ancho * $altura),
        ];
    }

    return $resultado;
}

function ordenarProductos($productos)
{
    $result = [];
    // sort($productos, SORT_DESC);
    for ($i = 0, $j = 1; $i < count($productos); $i++, $j++) {
        $result[] = $productos[$i]["producto-$j"];
    }

    rsort($result, SORT_DESC);


    foreach ($result as $key => $value) {
        echo "Producto " . ($key + 1) . ": $value <br>";
    }
}


$datosOrdenados = recibirDatos($datos);
$productosOrdendados = calcularProductos($datosOrdenados);

// print_r($datos);
// echo count($datos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="contain">
        <div class="container">
            <form action="">
                <p>El resultado del ordenamiento de los productos, de mayor a menor, es el siguiente: </p>
                <p><span>
                        <?php ordenarProductos($productosOrdendados); ?>
                    </span></p>
            </form>
        </div>
    </main>
</body>

</html>
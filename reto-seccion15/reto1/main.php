<?php

$datos = $_REQUEST;

$priceValue = $datos["price"];

function calcularDescuento($price)
{

    if ($price) {
        $discount = 0.35;
        $priceDiscount = $price * $discount;
        return ($price - $priceDiscount);
    } else {
        return false;
    }
}

function imprimirPrecioConDescuento($price)
{
    $priceNew = calcularDescuento($price);

    if(!$priceNew){
        return "No ingresaste valor alguno";
    }
    return "Tu nuevo precio es: $$priceNew pesos colombianos";
}

$precioConDescuento = imprimirPrecioConDescuento($priceValue);
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
    <div>
        <div class="container">
            <p class="resultado"><?php echo $precioConDescuento ?></p>
            <a href="index.html">Volver a Inicio</a>
        </div>
    </div>
</body>

</html>
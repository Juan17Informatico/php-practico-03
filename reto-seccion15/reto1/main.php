<?php

$datos = $_REQUEST;

$priceValue = $datos["price"];

function calcularDescuento ($price){

    if($price){
        $discount = 0.35;
        $priceDiscount = $price * $discount;
        return ($price - $priceDiscount);
    }else{
        print_r("No ingresaste valor alguno");
    }

}

function imprimirPrecioConDescuento($price){
    $priceNew = calcularDescuento($price);
    echo "Tu nuevo precio es: $$priceNew pesos colombianos";
}

imprimirPrecioConDescuento($priceValue);
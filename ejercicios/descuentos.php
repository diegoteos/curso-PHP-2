<?php

function  descuento ($precio){
    $precioFinal = $precio - ($precio * 35) / 100;
    return $precioFinal; 
}

echo "El precio final de un pantalon que vale 100 quetzales es de: " . descuento(60) . " quetzales.";
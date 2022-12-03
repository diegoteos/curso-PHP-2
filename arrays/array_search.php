<?php

$array = array(
    0 => 'azul',
    1 => 'cafe',
    2 => 'verde',
    3 => 'amarillo',
    4 => 'rojo'
);

$clave = array_search('verde', $array); 
$clave2 = array_search('rojo', $array);  

echo "la primera busqueda es: $clave";

echo '<br>';

echo "la clave es: $clave2";

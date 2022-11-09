<?php

// Cambiamos el indice de minusculas a mayusculas 
$nombres = array
(
    "FirSt" => 1, 
    "SecOnd" => 4,
    "HoLa" => 'diego'
);


$mayusculas = (array_change_key_case($nombres, CASE_UPPER));
print_r ($mayusculas);


echo '<br /><br />';


// Cambiamos el indice de minusculas a mayusculas 
$minusculas = (array_change_key_case($nombres, CASE_LOWER));
print_r($minusculas);

<?php

$persona = array(
    "nombre" => "armando",
    "nombre2" => "carlos",
    "apellido" => "jjan"
);
$persona2 = array(
    "armando",
    "carlos",
    "jjan"
);

// funcion implode convierte un array a string
echo implode(' ', $persona) . "<br/>";
echo '<pre>';
var_dump($persona);
echo '<br>';
var_dump($persona2);


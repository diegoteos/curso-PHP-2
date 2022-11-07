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
echo implode(' ', $persona) . "\n";
echo '<pre>';
var_dump($persona);
echo '<br>';
var_dump($persona2);


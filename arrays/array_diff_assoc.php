<?php
// LA FUNCION array_diff_assoc nos brinda la diferencia de la comparacion de un array con otro
// segun la comparacion del contenido de cada uno de los indices
$array1    = array(
    0 => 'hola',
    5 => 'este',
    12 => 'es',
    11 => 'un',
    111 => 'saludo'
);
$array2    = array(
     'hola',
     'este',
     'es',
     'un',
     'saludo'
);
echo '<pre>';
$resultado = array_diff_assoc($array1, $array2);
print_r($resultado);

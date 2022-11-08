<?php
// MUESTRA TODOS LOS RESULTADOS UNICAMENTE DEL INICE SELECCIONADO
// Array representando un conjunto de registros posibles devueltos desde una base de datos
$registros = array(
    array(
        'id' => 2135,
        'nombre' => 'John',
        'apellido' => 'Doe',
    ),
    array(
        'id' => 3245,
        'nombre' => 'Sally',
        'apellido' => 'Smith',
    ),
    array(
        'id' => 5342,
        'nombre' => 'Jane',
        'apellido' => 'Jones',
    ),
    array(
        'id' => 5623,
        'nombre' => 'Peter',
        'apellido' => 'Doe',
    )
);
 
$nombres = array_column($registros, 'nombre');
echo '<pre>';
print_r($nombres);
?>
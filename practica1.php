<?php
include 'practica.php';

$datos = array(
    'nombre' => 'diego',
    'apellido' => 'teos',
    'edad' => 22,
    'escuela' => 'Escuela oficial preescolar de niños super dotados',
    
);

$alumnos = new alumno();

$alumnos = $alumnos->registroAlumnos($datos);
 echo "$alumnos";




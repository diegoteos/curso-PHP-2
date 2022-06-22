<?php
//creamos la funcion con sus parametros
function insertar($nombre, $apellido, $profesion)
{
   
        echo "Hola sus datos son " . $nombre . ' ' . $apellido . ' y su profesion es ' . $profesion . '<br />';
   
}

//enviamos los parametros y metemos el return a una variable llamada datos
$datos = insertar('Diego', 'Teos', 'Programador');


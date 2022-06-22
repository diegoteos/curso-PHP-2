<?php
//creamos la funcion y sus parametros
function insertar($nombre, $apellido, $profesion)
{
   
        return "Hola sus datos son " . $nombre . ' ' . $apellido . ' y su profesion es ' . $profesion . '<br />';
   
}

//enviamos los parametros y metemos el return a una variable llamada datos
$datos = insertar('Diego', 'Teos', 'Programador');

// imprimimos el return
echo $datos;

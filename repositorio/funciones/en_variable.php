<?php

// creamos una variable y le asignamos una funcion
$hola = function ($nombre, $apellidos) {

    echo "Hola $nombre tu apellido es $apellidos";
};
$diego = 'puta madre ';
$alonzo = ' Saber que putas ';
$apellidos = ' Saber que putas dos veces mas ';

//le metemos los parametros a la variable
$hola($diego, $alonzo, $apellidos);

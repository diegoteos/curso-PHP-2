<?php

// creamos una variable y le asignamos una funcion
$hola = function ($nombre, $apellidos) {

    echo "Hola $nombre tu apellido es $apellidos";
};
$diego = 'Hola madre ';
$teos = ' Saber que cosa ';
$apellidos = ' Saber que cosas hice dos veces mas ';

//le metemos los parametros a la variable
$hola($diego, $teos, $apellidos);

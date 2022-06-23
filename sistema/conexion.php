<?php
$servidorDB = "localhost";
$usuarioDB = "root";
$contraseñaDB = "Guatemala2022.";
$nombreDB = "personal";

$conexion = new mysqli($servidorDB, $usuarioDB, $contraseñaDB, $nombreDB);

if(!$conexion->connect_error && !$conexion->connect_errno){
		echo 'Conexion exitosa';	
}
if($conexion->connect_error && $conexion->connect_errno){
		echo 'Error en la conexion: '.$conexion->connect_errno;	
		echo 'Error en la conexion: '.$conexion->connect_error;	
}

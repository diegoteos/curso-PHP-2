<?php
if ($_POST) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    
    require_once('correo.php');
    notificar($nombre, $apellido, $telefono, $correo, $ip, $fecha, $SO, $nav);
    
    echo "Los datos recibidos fueron nombre: $nombre, $apellido, $telefono, $correo";
    
    $archivo = fopen('data.php', 'a');
    $gestor = fwrite ($archivo, "$nombre $apellido $telefono $correo \n");

} 

?>






<?php
function insertar($nombre, $contra, $usuario)
{
    include 'conexion.php';
    $sql = "INSERT INTO `usuarios` (`nombre`, `contraseña`, `usuario`) VALUES ('$nombre', '$contra', '$usuario')";
    $resultado = $conexion->query($sql);
    if ($resultado === true) {
        return "<br />Datos ingresados correctamente <br />";
    }
    mysqli_close($conexion);
}
$esto = insertar('diego', 'alonzo', 'Diego');
echo $esto;

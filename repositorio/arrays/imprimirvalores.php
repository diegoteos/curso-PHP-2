<?php

$data = json_decode(file_get_contents($url), true);

//RECORREMOS E IMPRIMIMOS CADA UNO DE LOS VALORES DEL ARRAY
foreach ($data as $datos => $valores) {
    echo '<li>' . $datos . ' : ' . $valores . '</li>';
}

//IMPRIMIMOS SELECTIVAMENTE INSERTANDO LOS VALORES EN UNA VARIABLE

echo $correo = $data['emailSinMascara'];
echo $estado = $data['estado'];
echo $telefono = $data['telefono'];

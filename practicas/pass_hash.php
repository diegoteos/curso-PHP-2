<?php

$contraseña = "Esta es la contraseña";
$contraseña = password_hash($contraseña, PASSWORD_BCRYPT);

echo $contraseña;

if(password_verify("Esta es la contraseña", $contraseña)){
    echo '<br>';
echo "las contraseñas son iguales";
}

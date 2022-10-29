<?php

function token($tamaño = 4){
    $caracteres = "0123456789";
    $tam = strlen($caracteres);
    $valores = ""   ;
    for ($i=0; $i < $tamaño; $i++) { 
        $valores .= $caracteres[rand(0, $tam - 1)];
    }
    return 'Token Bearer: ' . $valores;
}

echo token(4);
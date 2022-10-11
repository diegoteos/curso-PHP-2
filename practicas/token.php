<?php

function token($tamaño = 10){
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789)";
    $tam = strlen($caracteres);
    $valores = ""   ;
    for ($i=0; $i < $tamaño; $i++) { 
        $valores .= $caracteres[rand(0, $tam - 1)];
    }
    return 'Token: ' . $valores;
}

echo token(50);
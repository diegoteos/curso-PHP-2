<?php

function gato($a, $b) {
    $resultado = (2 * $a)+ $b;
    return $resultado;
}

for ($i=0; $i < 10; $i++) { 
    if ($i != 0&& $i != 8) {
        echo gato($i, $i+1) . '<br />';
    }
}
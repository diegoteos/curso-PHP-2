<?php

$matriz = array(
    'G',
    'B',
    'R',
    'R',
    'B',
    'R',
    'G'

);

print_r($matriz);

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

rsort($matriz);

$resultado = array();
foreach($matriz as $indice => $valor){
    array_push($resultado, $valor);
}

print_r($resultado);
<?php

// Retorna un array multidimensional indexado numéricamente, comenzando desde cero, en el cual cada dimensión contiene la cantidad de elementos definida en size.

$abecedario = array('abrir', 'beber', 'comer', 'dinero', 'estado', 'fama', 'g', 'h', 'i', 'j', 'k');

$caracteres = array_chunk($abecedario, 3);

echo '<pre>';
echo '<br/><br/>';

print_r($caracteres);
//$varlor = $caracteres[10];
print_r($caracteres[1]);



?>
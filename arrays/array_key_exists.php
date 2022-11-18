<?php
// nos permite hacer una busqueda de indice dentro de un array

$buscar_indice = array('uno' => 1, 'dos' => 2, 'tres' => 3);
$indice_buscado = 'uno';
if (array_key_exists($indice_buscado, $buscar_indice)) {
    echo "El indice buscado si existe y es: " . print_r($buscar_indice[$indice_buscado]);
}
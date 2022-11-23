<?php

// la funcion array_rand selecciona la cantidad de indices indicada dentro del array indicado al azar
$entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$claves_aleatorias = array_rand($entrada, 3);
echo $entrada[$claves_aleatorias[0]] . "\n";
echo $entrada[$claves_aleatorias[1]] . "\n";
echo $entrada[$claves_aleatorias[2]] . "\n";

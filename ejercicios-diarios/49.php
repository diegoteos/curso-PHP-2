<h2>Dada una matriz de números, encuentre la suma máxima de cualquier subarreglo contiguo de la matriz.
Por ejemplo, dada la matriz [34, -50, 42, 14, -5, 86], la suma máxima sería 137, ya que tomaríamos los elementos 42, 14, -5 y 86.
Dada la matriz [-5, -1, -8, -9], la suma máxima sería 0, ya que no tomaríamos ningún elemento.
Haz esto en tiempo O(N).</h2>

<?php

// matriz
$matriz = array(34, -50, 42, 14, -5, 86);

// funcion que suma todos los valores
$suma = array_sum($matriz);

// creamos subarreglos 

echo $suma;

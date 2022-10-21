<?php

echo "<h2>Good morning! Here's your coding interview problem for today.
This problem was asked by Uber.
Given an array of integers, return a new array such that each element at index i of the new array is the product of all the numbers in the original array except the one at i.
For example, if our input was [1, 2, 3, 4, 5], the expected output would be [120, 60, 40, 30, 24]. If our input was [3, 2, 1], the expected output would be [2, 3, 6].
Follow-up: what if you can't use division?
" . '<br />';
echo '<br /><br />';
echo "<h2>¡Buenos dias! Aquí está su problema de entrevista de codificación para hoy.
Uber preguntó este problema.
Dada una matriz de enteros, devuelva una nueva matriz tal que cada elemento en el índice i de la nueva matriz sea el producto de todos los números en la matriz original excepto el que está en i.
Por ejemplo, si nuestra entrada fuera [1, 2, 3, 4, 5], la salida esperada sería [120, 60, 40, 30, 24]. Si nuestra entrada fuera [3, 2, 1], la salida esperada sería [2, 3, 6].
Seguimiento: ¿qué pasa si no puedes usar la división?</h2>" . '<br />';

$ingreso = array(
    1,
    2,
    3,
    4,
    5
);

$resultado = array(120, 60, 40, 30, 24);

var_dump($resultado);

echo "<br /><br />Algoritmo multiplicar posiciones del array de la siguiente manera: <br />";
echo "resultado primera fila:  2 * 3 * 4 * 5 = " . 2 * 3 * 4 * 5 . '<br />';
echo "resultado primera fila:  3 * 4 * 5 * 1 = " . 3 * 4 * 5 * 1 . '<br />';
echo "resultado primera fila:  4 * 5 * 1 * 2 = " . 4 * 5 * 1 * 2 . '<br />';
echo "resultado primera fila:  5 * 1 * 2 * 3 = " . 5 * 1 * 2 * 3 . '<br />';
echo "resultado primera fila:  1 * 2 * 3 * 4 = " . 1 * 2 * 3 * 4 . '<br />';


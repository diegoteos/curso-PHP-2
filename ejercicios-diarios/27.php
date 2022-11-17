<?php

$uno = '{';
$dos = '}';
$tres = '[';
$cuatro = ']';
$cinco = '(';
$seis = ')';

$cadena = '()';
$tamaño = strlen($cadena);
$contador = 0;
if (strlen($cadena) % 2 == 0) {

    for ($i = 0; $i < strlen($cadena); $i++) {
        $contador++;
        if ($cadena[$i] == $uno && $cadena[$i + 1] != $dos) {
            echo "una no es correcta";
        }
        if ($cadena[$i] == $tres && $cadena[$i + 1] != $cuatro) {
            echo "dos no es correcta";
        }
        if ($cadena[$i] == $cinco && $cadena[$i + 1] != $seis) {
            echo "tres no es correcta";
        }
        if ($contador == $tamaño) {
            echo "verdadero";
        }
    }
} else {
    echo "falso";
}

<?php
echo "<h2>Este problema fue pedido por Facebook.
Dada una matriz de números que representan los precios de las acciones de una empresa en orden cronológico, escriba una función que calcule la ganancia máxima que podría haber obtenido al comprar y vender esa acción una vez. Debes comprar antes de poder venderlo.
Por ejemplo, dado [9, 11, 8, 5, 7, 10], deberías devolver 5, ya que podrías comprar la acción a 5 dólares y venderla a 10 dólares.</h2>";
echo '<br />';
$acciones = array(
    9,
    11,
    8,
    5,
    7,
    10
);

// primero establecemos el tamaño de los valores 
echo '<br />';
$cantidad = count($acciones);
echo "Los valores a analizar son: " . $cantidad;

// establecemos el indice superior
$ultimoIndice = $cantidad - 1;


// buscamos el valor mas alto de todos
echo '<br />';
echo "La accion mas alta de todas es: " . $accionMasCaraDeTodas = max($acciones);


// buscamos el valor mas pequeño de todos
echo '<br />';
echo "La accion mas barata es: " . $accionMasBarata = min($acciones);

// buscamos el indice del valor mas pequeño de todos
echo '<br />';
echo "La posicion de la accion mas pequeña es: " . $indiceMenor = array_search($accionMasBarata, $acciones);


// descartamos la continuacion si el valor de la accion mas pequeña es la ultima 
echo '<br />';
if ($indiceMenor == $ultimoIndice) {
    echo "La accion mas barata es la accion del dia de hoy, por lo que no se puede vender";
    exit();
} else {

    $accionMasCara = 0;
    for ($i = $indiceMenor; $i <= $ultimoIndice; $i++) {
        if ($acciones[$i] > $accionMasBarata && $acciones[$i] > $accionMasCara) {
            $accionMasCara = $acciones[$i];
        }
    }
    echo "La accion mas cara despues de la compra de la mas barata es de: " . $resultado = $accionMasCara;
    $ganancia = $resultado - $accionMasBarata;
    echo '<br />';
    echo "La posicion de la accion que proporciona la mayor ganancia es: " . $indiceMayor = array_search($resultado, $acciones);

    echo '<br />';
    echo "La ganancia obtenida producto de la venta de la accion mas barata es de: " . $ganancia;
}


// buscamos el valor mas alto despues del indice encontrado
echo '<br />';

/*
$valorMasAlto = "";
for ($i=$accionMasVarata; $i <= $cantidad; $i++) { 
    $valorMasAlto = ;
}
*/

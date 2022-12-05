<?php

echo "<h2>¡Buenos dias! Aquí está su problema de entrevista de codificación para hoy.
Este problema fue solicitado por Google.
Dados los recorridos en orden y en orden previo de un árbol binario, escriba una función para reconstruir el árbol.
Por ejemplo, dado el siguiente recorrido previo al pedido:
[a, b, d, e, c, f, g] Y el siguiente recorrido en orden: [d, b, e, a, f, c, g] Debes devolver el siguiente árbol:</h2>";

?>

<img src="img/48.jpg" alt="">

<h1>Resolucion:</h1>

<?php

// creamos la funcion que reciba los parametros
$arbol = array();
function otra(...$a)
{
    global $arbol;
    array_push($arbol, $a);
    return $arbol;
}
$respuesta = otra(1, 2, 3);
print_r($respuesta);

$uno = $arbol[0];
echo '<br />';
print_r($uno);

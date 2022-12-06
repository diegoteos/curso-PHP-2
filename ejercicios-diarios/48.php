<?php

echo "<h2>¡Buenos dias! Aquí está su problema de entrevista de codificación para hoy.
Este problema fue solicitado por Google.
Dados los recorridos en orden y en orden previo de un árbol binario, escriba una función para reconstruir el árbol.
Por ejemplo, dado el siguiente recorrido previo al pedido:
[a, b, d, e, c, f, g] Y el siguiente recorrido en orden: [d, b, e, a, f, c, g] Debes devolver el siguiente árbol:</h2>";
?>

<img src="img/48.jpg" alt="">

<h1>Ingrese los valores:</h1>
<form action="" method="post">
<input type="text" name="a" id=""><br>
<input type="text" name="b" id=""><br>
<input type="text" name="c" id=""><br>
<input type="text" name="d" id=""><br>
<input type="text" name="e" id=""><br>
<input type="text" name="f" id=""><br>
<input type="text" name="g" id=""><br><br>
<button type="submit">Obtener arbol</button>
</form>

<?php

if ($_POST){
echo "<h1>Resolucion:</h1>";
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];

    // creamos la funcion que reciba los parametros
    $arbol = array();
    function otra(...$a)
    {
        global $arbol;
        array_push($arbol, $a);
        $uno = $arbol[0];
        //print_r($uno);
        echo ' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ' .$uno[3];
        echo "<br/>";
        echo "<br/>";
        echo " &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  /  &nbsp   &nbsp &nbsp  "; ?> \ <?php
        echo "<br/>";
        echo "<br/>";
        echo ' &nbsp &nbsp &nbsp &nbsp &nbsp' . $uno[1] . ' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp' . $uno[5];
        echo "<br/>";
        echo "<br/>";
        echo " &nbsp &nbsp &nbsp / &nbsp &nbsp " ?> \ <?php echo " &nbsp &nbsp  &nbsp &nbsp / &nbsp&nbsp";  ?> \ <?php
        echo "<br/>";
        echo "<br/>";
        echo ' &nbsp ' . $uno[0] . ' &nbsp &nbsp &nbsp &nbsp ' . $uno[2] . ' &nbsp &nbsp ' . $uno[4] . ' &nbsp &nbsp &nbsp &nbsp ' . $uno[6];
        
    }
    $respuesta = otra($a, $b, $c, $d, $e, $f, $g);
}


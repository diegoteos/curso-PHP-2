<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revierte cadenas</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="cadena" id="">
        <input type="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST)) {
$cadena = $_POST['cadena'];
$miCadenaInvertida = explode(" ", $cadena);
$contador = count($miCadenaInvertida);
for ($i= $contador - 1; $i >= 0; $i--) { 
    echo "$miCadenaInvertida[$i] ";
}
}
?>
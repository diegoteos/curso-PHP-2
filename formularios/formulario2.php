<?php
if ($_POST) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <h1>formulario 2</h1>
    <form action="formulario3.php" method="post">
        <input hidden type="text" name="nombre" value="<?php echo $nombre; ?>">
        <input hidden   type="text" name="apellido" value="<?php echo $apellido; ?>">
        <input type="number" name="telefono" id="">
        <input type="email" name="correo" id="">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>





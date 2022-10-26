<?php

if (isset($_POST['correo']) && isset($_POST['asunto'])) {
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    require_once 'correo.php';
    correo($nombre, $asunto, $correo, $telefono, $mensaje, $ip, $fecha, $SO, $nav);
} else {
    echo "Ingrese la informacion requerida.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contacto</title>
</head>

<body>
    <div class="container">
        <br>
        <h3>Formulario de contacto:</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Ingrese su nombre:</label>
                <input type="txt" class="form-control" name="nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Asunto o tema:</label>
                <input type="text" class="form-control" name="asunto">
            </div>
            <div class="mb-3">
                <label class="form-label">Correo electronico (contacto):</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono:</label>
                <input type="number" class="form-control" name="asunto">
            </div>
            <div>
                <label class="form-label">Mensaje:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar información</button>
        </form>
    </div>
</body>

</html>
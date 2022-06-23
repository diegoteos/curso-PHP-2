<?php

require_once 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$estado_civil = $_POST['estado_civil'];
$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

$arrayIntereses = null;

$num_array = count($intereses);
$contador = 0;

if ($num_array > 0) {
    foreach ($intereses as $key => $value) {
        if ($contador != $num_array - 1)
            $arrayIntereses .= $value . ' ';
        else
            $arrayIntereses .= $value;
        $contador++;
    }
}

$sql = "INSERT INTO personas (nombre, correo, telefono, estado_civil, hijos, intereses)
VALUES ('$nombre', '$email', $telefono, '$estado_civil', '$hijos', '$arrayIntereses')";

$resultado = $conexion->query($sql);

?>

<?php
include_once 'cabecera.php';
?>
<title>Gruardar</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="row" style="text-align: center">
            <?php if ($resultado){ ?>
                <h3>
                    REGRISTRO GUARDADO
                </h3>
                <?php } else { ?>
                    <h3>ERROR AL GUARDAR</h3>
                    <?php } ?>

                    <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>

        </div>

    </div>

</body>

</html>
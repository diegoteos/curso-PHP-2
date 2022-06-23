<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Sistema</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">Nuevo registro</h1>

                <form class="form-horizontal" action="guardar.php" method="post" autocomplete="off">



                    <div class="form-group">
                        <strong>
                            <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
                        </strong>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <strong><br>
                            <label for="email" class="col-sm-2 control-label">Correo:</label>
                        </strong>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <strong><br>
                            <label for="telefono" class="col-sm-2 control-label">Telefono:</label>
                        </strong>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <strong><br>
                            <label for="estado_civil" class="col-sm-2 control-label">Estado Civil:</label>
                        </strong>
                        <div class="col-sm-10">
                            <select class="form-control" name="estado_civil" id="estadoestado_civil">
                                <option value="SOLTERO">SOLTERO</option>
                                <option value="CASADO">CASADO</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <strong><br>
                            <label for="hijos" class="col-sm-2 control-label">¿Tiene hijos?</label>
                        </strong>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" id="hijos" name="hijos" value="0" checked>SI
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="hijos" name="hijos" value="1" checked>NO
                            </label>
                        </div>
                    </div>




                    <div class="form-group">
                        <strong><br>
                            <label for="intereses" class="col-sm-2 control-label">¿Tiene hijos?</label>
                        </strong>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" id="hijos" name="hijos" value="0" checked>SI
                            </label>


        </div>
    </div>



    </form>
    </div>

</body>

</html>
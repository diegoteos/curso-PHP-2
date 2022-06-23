<?php
include_once 'cabecera.php';
?>
<title>Nuevo registro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 style="text-align:center"><br>Nuevo registro</h1>

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
                                <input type="radio" id="hijos" name="hijos" value="1" checked>SI
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="hijos" name="hijos" value="0">NO
                            </label>
                            <br>
                        </div>
                    </div>




                    <div class="form-group">
                        <br>
                        <label for="intereses" class="col-sm-2 control-label">INTERESES</label>

                        <div class="col-sm-10">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <br>
                            <a href="index.php" class="btn btn-secondary">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
        </div>
</body>

</html>
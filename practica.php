<?php

class alumno
{

    public function registroAlumnos($alumnos)
    {

        $nombre = $alumnos['nombre'];
        $apellido = $alumnos['apellido'];
        $edad = $alumnos['edad'];
        $escuela = $alumnos['escuela'];

        return $nombre . " " . $apellido . " " . $edad . " " . $escuela;
    }
}

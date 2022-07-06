<?php

function buenosDias($nombre)
{
    return "Hola $nombre es un gusto saludarlo.";
}

function saludo($nombre)
{
    return buenosDias($nombre);
}

echo saludo("diego");

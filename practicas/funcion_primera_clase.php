<?php

function buenosDias($nombre)
{
    return "Hola, por este medio le damos la bienvendia $nombre es un gusto saludarlo.";
}

function saludo($nombre)
{
    return buenosDias($nombre);
}

echo saludo("diego");

<?php
echo "Bienvenido a su sistema de traduccion de palabras, por favor inserte el nombre de algun animal para ver su escritura en Ingles (no haga uso de tildes).";
function traducirPalabras($palabra)
{
    $palabra = str_replace(" ", "", $palabra);
    $palabra = strtolower($palabra);
    //echo  trim ( $palabra, ' ');

    switch ($palabra) {
        case 'perro':
            return 'Dog';
            break;

        case 'gato':
            return 'Cat';
            break;

        case 'bat':
            return 'Murcielago';
            break;

        case 'oso':
            return 'Bear';
            break;

        case 'toro':
            return 'Bull';
            break;

        case 'camello':
            return 'Camel';
            break;

        case 'puma':
            return 'Cougar';
            break;

        case 'vaca':
            return 'cow';
            break;

        case 'venado':
            return 'Deer';
            break;

        case 'delfin':
            return 'Dolphin';
            break;

        case 'elefante':
            return 'Elephant';
            break;

        case 'zorro':
            return 'Fox';
            break;

        case 'jirafa':
            return 'Giraffe';
            break;

        case 'cabra':
            return 'Goat';
            break;

        case 'gorila':
            return 'Gorilla';
            break;

        case 'hipopotamo':
            return 'Hippopotamus';
            break;

        case 'abeja':
            return 'bee';
            break;

        case 'aguila':
            return 'eagle';
            break;

        case 'araña':
            return 'spider';
            break;

        case 'ardilla':
            return 'squirrel';
            break;

        case 'avestruz':
            return 'ostrich';
            break;

        case 'avispa':
            return 'wasp';
            break;

        case 'burro':
            return 'donkey';
            break;

        case 'caballo':
            return 'horse';
            break;

        case 'calamar':
            return 'squid';
            break;

        case 'cangrejo':
            return 'crab';
            break;

        case 'caracol':
            return 'snail';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;

        case 'perro':
            return 'dog';
            break;
            default: echo "no existe";
    }
}
echo '<br />' . traducirPalabras('jirafa');

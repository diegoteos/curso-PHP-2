<?php


function añoBisiesto($año)
{

    $contador = "0";

    for ($i = $año; $i < 2200; $i++) {
        if ($i % 4) {
            //echo "Año: $i <br />";
        } else {
            echo $contador + 1 . " El año: $i es biciesto <br />";
            $contador++;
            if ($contador == 30) {
                echo "este fue el ultimo";
                die();
            }
        }
    }
}

añoBisiesto(2021);

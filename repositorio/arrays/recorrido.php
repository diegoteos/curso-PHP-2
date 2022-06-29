
<?php

    
    $respuestas = substr($respuesta, 65144, 5180);
    var_dump($respuestas);
    //echo $respuestas;

    $respuestas = substr($respuesta, 16331, 100000);
    $cadena_buscada1  = "'card card-body'&gt;";
    $cadena_buscada2 = '</tbody>';
    $posicion_1 = strrpos($respuestas, $cadena_buscada1);
    $posicion_2 = strrpos($respuestas, $cadena_buscada2);
    $respuestas_res = substr($respuestas, $posicion_1 + 17, $posicion_2);
    
    curl_close($ch);
    var_dump($respuesta);
    
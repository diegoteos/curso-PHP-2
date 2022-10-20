<?php
$pasos = 2;
$gradas = '1 ';
$gradas = str_repeat($gradas, 4);
var_dump($gradas);
//echo $gradas = strlen($gradas);
echo '<br />';
$gradas = explode(" ", $gradas);
var_dump($gradas);
echo '<br />';
echo $tamañoGradas = count($gradas);
echo '<br />';

for ($i=0; $i < $tamañoGradas - 1; $i++) { 
    echo 'Hola <br />';
}





<?php

$doscientos = 200;
$cien = 100;
$cincuenta = 50;
$veinte = 20;
$diez = 10;
$cinco = 5;
$uno = 1;

$retiro = "1000";

//echo strlen($retiro);

for ($i=0; $i < strlen($retiro); $i++) { 
    echo '<br />' . $retiro[$i];
    if(strlen($retiro) == 4){
        echo '<br />' . "Su retiro es de mas de 1000 quetzales";
    }
    if(strlen($retiro) == 3){
        echo '<br />' . "Su retiro es de 100 o mas quetzales";
    }
    if(strlen($retiro) == 2){
        echo '<br />' . "Su retiro es de 10 o mas quetzales";
    }
    if(strlen($retiro) == 1){
        echo '<br />' . "Su retiro es de 1 o mas quetzales";
    }
}


?>


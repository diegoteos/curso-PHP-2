<?php
// rsort cambia el orden alfabetico de la z a la a 
// sort cambia el orden alfabetico de la A a la Z
//$frutas = array("Maria", "Jose", "Pilar", "Maria", "Esmeralda", "Paulina", "Zoila");

$frutas = array(
    "uno" => "Maria",
    "dos" => "Jose",
    "tres" => "Pilar",
    "cuatro" => "Maria",
    "cinco" => "Esmeralda",
    "seis" => "Paulina",
    "siete" => "Zoila"
);
echo '<pre>';
print_r($frutas);
rsort($frutas);

foreach ($frutas as $key => $val) {
    echo "$key = $val\n";
}
sort($frutas);
echo '</br>';
foreach ($frutas as $clave => $valor) {
    echo "$clave = $valor <br />";
}

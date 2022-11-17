<?php

$array = array('hola', 'mundo', 'cruel', 2022);


if (in_array('hola', $array)) {
    echo "hola si que si existe";
}

$uno = 'hola mundo';
$dos = array();

//echo strlen($uno);

for ($i=0; $i < strlen($uno); $i++) { 

    array_push($dos, $uno[$i]);
}
echo '<pre>';
print_r($dos);

if (in_array('u', $dos)) {
echo "si existe";    
}



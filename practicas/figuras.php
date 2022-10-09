<?php


for ($i=0; $i < 11; $i++) { 

    $figura = str_repeat('&nbsp*', $i);
    echo $figura . '<br />';
}

for ($i=0; $i < 11; $i++) { 

    $espacio = str_repeat('&nbsp', ($i * 3));
    $asterisco = str_repeat('&nbsp*', (10 - $i));

    echo $espacio . $asterisco . '<br />';
}

for ($i=0; $i < 11; $i++) { 

    $espacio = str_repeat('&nbsp', (30 - $i * 3));
    $asterisco = str_repeat('*&nbsp', ($i));

    echo  $espacio . $asterisco  . '<br />';
}
for ($i=0; $i < 11; $i++) { 

    $figura = str_repeat('&nbsp*', (10 - $i * 1));
    echo $figura . '<br />';
}




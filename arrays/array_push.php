<?php
$pares = array();
$impares = array();

for ($i = 0; $i < 10; $i++) {
    $numero = random_int(0, 10);
    if ($numero % 2 == 0) {
        array_push($pares, $numero);
    } else {
        array_push($impares, $numero);
    }
}
echo '<pre>';
echo 'Pares';
echo '<br />';
print_r($pares);
echo '<br />';
echo 'Impares';
echo '<br />';
print_r($impares);

<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
echo '<pre>';
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));



$abecedario = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k');

$caracteres = array_chunk($abecedario, 2);

echo '<br/><br/>';

print_r($caracteres);
$varlor = $caracteres[10];
print_r($caracteres[8]);



?>
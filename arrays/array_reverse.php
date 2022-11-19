<?php

$datos = array('uno', 'dos', 'tres', array('one', 'two', 'three'), 'prueba');

echo '<pre>'; 
print_r($datos);

$datos1 = array_reverse($datos, true);


print_r($datos1);
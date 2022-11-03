<?php

include 'clientes.php';

// Creamos un nuevo objeto o instanciamos y mostramos los clientes

$cliente = new Clientes('2323232323', 'josls@info.com');


/*
echo '<pre>';
echo '<br />';
print_r($cliente->verCliente());
echo '</pre>';
echo '<pre>';
echo '<br />';
print_r('DPI: ' . $cliente->verDPI());
echo '</pre>';
echo '<pre>';
echo '<br />';
print_r('Email: ' . $cliente->verEmail());
echo '</pre>';
*/
// generarlo formato json 
//echo json_encode($cliente->verCliente());


print_r('DPI: ' . $cliente->getDPI());
echo '<br />';
print_r('Email: ' . $cliente->getEmail());

$cliente->setDPI('9999999A');
$cliente->setEmail('eso@info.cm');
echo '<br />';
echo '<br />';
print_r('DPI corregiedo: ' . $cliente->getDPI());
echo '<br />';
print_r('Email corregiedo: ' . $cliente->getEmail());
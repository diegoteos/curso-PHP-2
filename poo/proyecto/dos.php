<?php

include 'clientes.php';

// Creamos un nuevo objeto o instanciamos y mostramos los clientes

$cliente = new Clientes('2323232323', 'josls@info.com');

echo '<pre>';
var_dump($cliente->verCliente());
echo '<br />';
var_dump($cliente->verCliente());
echo '<br />';
print_r($cliente->verCliente());
echo '<br />';
print_r($cliente->verCliente());
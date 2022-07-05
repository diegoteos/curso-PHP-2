<?php

$password = '123';
$password2 = 123;

var_dump($password);
var_dump($password2);
// tradicional
// MD5
echo md5($password);
echo '<br>';

// SHA1
echo sha1($password);

echo '<br>';
echo '<br>';

// mediante la funcion hash (alg, string)
$hashes = hash_algos();
//var_dump($hashes);
/*
foreach (hash_algos() as $algo){
    echo $algo . ': ' . hash($algo, $password) . '<br>';
}
*/

// password_hash()
$hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
echo $hash . '<br>';

// password_verify() nos permite verificar si son iguales los password o no

if (password_verify($password2, $hash)) {
    echo 'El password es correcto.' . $password2 . '<br>';
} else {

    echo "No son iguales: " . $password2 . '<br>';
}

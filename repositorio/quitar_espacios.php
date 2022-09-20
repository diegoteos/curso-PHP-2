<?php

$uno = ' Esta es una prueba     
  
  ';
echo $uno;
echo '<br>';
$dos = ltrim($uno);
var_dump($dos);
echo '<br>';
echo $dos;
$dos = rtrim($dos);
echo '<br>';
echo $dos;
echo '<br>';
var_dump($dos);
echo '<br>';
echo strlen($dos);
$dos = str_replace(' ', '', $dos);
echo '<br>';
var_dump($dos);
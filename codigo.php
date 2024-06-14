<?php
function palavra_aleatoria($string) {
     // Embaralha a string
    $string_embaralhada = str_shuffle($string);

     // Pega uma palavra aleatória da string embaralhada
     $palavra_aleatoria = substr($string_embaralhada, 0, rand(1, strlen($string)));

     return $palavra_aleatoria;
 }
 ?>

 
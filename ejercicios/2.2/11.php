<?php

/*Escribir un programa en PHP que genere un array de un número aleatorio de
valores numéricos (entre 5 y 15). Los valores se encontraran entre 0 y 10,
también obtenidos de forma aleatoria.*/
$tamArray = rand(5,15);

$array = [];

for ($i=0; $i < $tamArray; $i++) { 
    $array[] = rand(0,10);
}

var_dump($array);
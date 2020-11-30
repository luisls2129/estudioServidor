<?php

/*Crear una función en PHP que añada un elemento al array. A dicha función
se le pasará el array y el elemento a insertar como argumentos.*/

$miArray = [3, 4, 6];

function añadirEnArray(&$array, $elemento){
    $array[] = $elemento;
}

añadirEnArray($miArray,442342);

var_dump($miArray);
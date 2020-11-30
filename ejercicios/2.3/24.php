<?php

/*Crea una función PHP donde se le pasarán 3 argumento. El primer
argumento será de tipo int. El segundo será un array numérico. El tercero
será una serie de números que tendremos que sumar al primer argumento.
El resultado lo añadiremos como un nuevo elemento al array. La función
deberá comprobar que los tipos de datos son correctos.*/
declare(strict_types=1);

function funct(int $num,array &$array,...$numeros){
    $suma = 0;
    foreach ($numeros as $value) {
        $suma += $value;
    }

    $suma += $num;
    $array[] = $suma;
}
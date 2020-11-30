<?php

/*Crea una función PHP que multiplique los números que se le pasen. A la
función se le pueden pasar diferente cantidad de números (2, 3, 5…) y
deberá multiplicarlos todos. */

function multiplicar(...$var){
    $mult = 1;
    foreach ($var as $value) {
        $mult *= $value;
    }
    return $mult;
}

echo multiplicar(2,4,2,0);
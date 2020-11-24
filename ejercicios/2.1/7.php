<?php

/*const LIMITE = 100;
$num = rand(1, LIMITE);

echo "el numero " . $num . " es: " , ($num%2==0) ? "par" : "impar";*/

const LIMITE = 100;
    $numero = rand(1, LIMITE);
    $paridad = ($numero%2==0) ? "par" : "impar";
    echo "El número es $numero y es $paridad";
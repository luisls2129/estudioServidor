<?php

/*Hacer un programa que indicada una nómina en una variable, si es menor de
800€ le haga un incremento del 20%, si está entre 800 € y 1200 € la deje
como está, y si es mayor le quite un 15%. Usar el condicional if.*/

$nomina = 1205;

if ($nomina < 800) {
    $nomina *= 1.2;
}elseif($nomina > 1200){
    $nomina *= 0.85;
}

echo "nomina final : " . $nomina;
<?php

include("17a.php");

var_dump($empleados);

$mayor = [
    "nombre" => "",
    "edad" => 0
];

$menor = [
    "nombre" => "",
    "edad" => 100
];

foreach ($empleados as $key => $value) {
    if ($value['edad'] > $mayor['edad']) {
        $mayor = $value;
    }
    if ($value['edad'] < $menor['edad']) {
        $menor = $value;
    }
}

var_dump($mayor);
var_dump($menor);
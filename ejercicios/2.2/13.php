<?php

/*Modificar el ejercicio anterior para que se almacene en una matriz las tablas
de multiplicar del 1 al 9 y las muestre por pantalla
*/
$tablas = [[]];
$numero = 1;
$fila = 0;
$columna = 0;

for ($z = 0; $z < 9; $z++) {
    for ($i = 1; $i <= 10; $i++) {
        $tablas[$fila][$columna] = $i * $numero;
        $columna++;
    }
    $numero++;
    $fila++;
}


echo "<table><tr><td></td>";

for ($i = 1; $i <= 10; $i++) {
    echo "<td>X$i</td>";
}
echo "</tr>";


$pos = 1;
foreach ($tablas as $key => $value) {
    echo "<tr><td>$pos</td>";
    foreach ($value as $key2 => $var) {
        echo "<td>$var</td>";
    }
    $pos++;
    echo "</tr>";
}/*
for ($i = 0; $i < 10; $i++) {
    echo "<td>$tabla7[$i]</td>";
}

var_dump($tablas);*/

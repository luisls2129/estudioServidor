<?php

/*Crear un archivo php que almacene en un array la tabla de multiplicar del 7.
El programa deberá sacar por pantalla dicha tabla*/

$tabla7 = [];

for ($i=1; $i <= 10; $i++) { 
    $tabla7[] = $i * 7;
}

echo "<table><tr>";

for ($i=1; $i <= 10; $i++) { 
    echo "<td>X$i</td>";
}
echo "</tr>";
for ($i=0; $i < 10; $i++) { 
    echo "<td>$tabla7[$i]</td>";
}
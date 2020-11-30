<?php

/*Crear dos ficheros, ejercicio27a.html y ejercicio27b.php. En el primero, habrá
un formulario donde el usuario introducirá dos números, y cuando le de al
botón calcular, abrirá ejercicio27b.php donde saldrá el resultado de
multiplicar los dos números introducidos*/

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo $num1 * $num2;
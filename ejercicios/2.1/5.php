<?php


$var1 = 2;
$var2 = 2;

if ($var1 > $var2) {
    echo $var1 . " es mayor que " . $var2;
}else if ($var2 > $var1) {
    echo $var2 . " es mayor que " . $var1;
}else{
    echo  $var1 . " y " . $var2 . " son iguales";
}
<?php

//var_dump(file("./fichero33.txt"));

$fichero = fopen("./fichero33.txt", "a+");

//fwrite($fichero, "adios todo");

echo fread($fichero, filesize("./fichero33.txt"));
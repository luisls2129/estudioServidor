<?php
$fileName = "./fichero33.txt";
$fichero33 = fopen($fileName,"a+");

$texto = "caraculo<br>";

fwrite($fichero33,$texto);
rewind($fichero33);
echo fread($fichero33,filesize("./fichero33.txt"));
<?php

$fichero33 = fopen("./fichero33.txt","r");


while ($content = fgets($fichero33)) {
    echo $content . "<br>";
}

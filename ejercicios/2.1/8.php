<?php

/*Haz un programa en php que dado un dni nos calcule la letra. El cálculo de la
letra se obtiene calculando el resto de la división del dni entre 23. Ese resto
será la posición de la letra en la cadena
‘TRWAGMYFPDXBNJZSQVHLCKEO’. Usar la función substr().
 */

 $cadena = "TRWAGMYFPDXBNJZSQVHLCKEO";
 $dni = 26762403;

 $resto = $dni % 23;

 echo "la letra del dni es " . substr($cadena,$resto,1);

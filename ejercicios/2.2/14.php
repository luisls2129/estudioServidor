<?php
/*Una empresa quiere actualizar su gestión de almacén. Hasta ahora, iban
apuntando en una hoja de cálculo el material que quedaba después de
retirarlo de las estanterías (si no se retiraba algún material, no se apuntaba
ese mes). Los datos de los dos meses que lleva abierta son:
Hacer un programa en PHP para que nos muestre el total de material que
queda en junio en el almacén.
*/


    $mayo = [
        "Tornillos" => 57,
        "Tuercas" => 23,
        "Clavos" => 45,
        "Arandelas" => 56,
        "Muelles" => 32

    ];
    $junio = [
        "Tornillos" => 32,
        "Arandelas" => 51,
        "Bridas" => 309

    ];



var_dump(($mayo + $junio));
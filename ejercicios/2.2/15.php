<?php

/*Un restaurante quiere añadir el postre a todos sus menús (actualmente
tienen menús con y sin postre). En su web, hecha con PHP, tienen el
siguiente array con los diferentes menús.
*/

$menus = [
    [
        "primero" => "sopa",
        "segundo" => "carne",
        "postre" => "tarta"
    ],
    [
        "primero" => "ensalada",
        "segundo" => "carne",
    ],
    [
        "primero" => "macarrones",
        "segundo" => "pescado",
    ],
    [
        "primero" => "sopa",
        "segundo" => "pescado",
        "postre" => "flan"
    ],
];

/*Escribe el código necesario para que, de forma lo más eficiente posible, nos
muestre los menús que no tienen postre actualmente (los menús se numeran
de forma correlativa empezando por el 1).*/

$menuSinPostre = [];

foreach ($menus as $key => $value) {
    if(!key_exists("postre",$value)){
        $menuSinPostre[] = $value;
    }
}

var_dump($menuSinPostre);
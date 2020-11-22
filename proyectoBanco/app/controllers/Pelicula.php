<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;

class Pelicula extends Controller{

    public function all(){

        $peliculas = modelPelicula::all();
        var_dump($peliculas);
    }
    
}
<?php

class Mamifero{

    public $especie;
    public $sonido;
    public $familia;

    public function __construct($especie, $sonido) {
        $this->especie = $especie;
        $this->sonido = $sonido;
    }

    public function sonido(){
        echo "Sonido de " . $this->especie . " de la familia " .$this->familia .": ". $this->sonido;
    }
}

class Perro extends Mamifero{

    public function __construct($familia) {
        $this->familia = $familia;
        parent::__construct("perro","guau");
    }

}

class Gato extends Mamifero{
    public function __construct($familia) {
        $this->familia = $familia;
        parent::__construct("gato","miau");
    }
}

$perro1 = new Perro("can");
$perro1->sonido();
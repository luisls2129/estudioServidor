<?php

class Empleado{

    private $sueldo;
    private $nombre;

    public function __construct($sueldo, $nombre) {
        $this->sueldo = $sueldo;
        $this->nombre = $nombre;

        echo "En empleado " . $nombre . " con el sueldo " . $sueldo;
    }

    protected function getSueldo(){
        return $this->sueldo;
    }

    protected function getNombre(){
        return $this->nombre;
    }

    protected function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    protected function setNombre($nombre){
        $this->nombre = $nombre;
    }

    protected function pagarImpuesto(){
        $pagar = false;
        if ($this->sueldo > 1200) {
            $pagar = true;
        }
        return $pagar;
    }

    protected function fraseImpuestos(){
        $result="";
        if ($this->pagarImpuesto()) {
            $result = "Debes pagar inpuestos";
        }else{
            $result = "No debes pagar impuestos";
        }
        return $result;
    }
}

$empleado1 = new Empleado(500, "marcelo");


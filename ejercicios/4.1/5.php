<?php

class Calculadora{

    protected function sumar(...$numeros){
        $result = 0;
        foreach ($numeros as $value) {
            $result += $value;
        }
        return $result;
    }

    protected function restar(...$numeros){
        $result = 0;
        foreach ($numeros as $value) {
            $result -= $value;
        }
        return $result;
    }

    protected function multiplicar(...$numeros){
        $result = 1;
        foreach ($numeros as $value) {
            $result *= $value;
        }
        return $result;
    }

    protected function dividir(...$numeros){
        $result = $numeros[0];
        $primeraVuelta = false;
        foreach ($numeros as $value) {
            if ($primeraVuelta) {
                $result /= $value;
            }else{
                $primeraVuelta = true;
            }
            
        }
        return $result;
    }

    public static function __callStatic($name, $arguments) {
        return (new static)->$name(...$arguments);
    }

}

echo Calculadora::dividir(100, 5, 2);
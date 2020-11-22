<?php

namespace core;


class Model{

    protected $table ;
    protected $primary_key = 'id';

    protected function all(){
        $result = DB\db::select($this->table);
        return $result;

    }


    public static function __callStatic($name, $arguments) {
        return (new static)->$name(...$arguments);
    }
}
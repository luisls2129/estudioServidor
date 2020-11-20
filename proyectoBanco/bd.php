<?php

try{

    $pdo = new PDO('mysql:host=localhost;dbname=banco','root','');

    $pdo->exec("set names utf8");
    $pdo->setAttribute(\PDO::ATTR_ERRMODE,
                       PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error al conectar con la Base de Datos";
}
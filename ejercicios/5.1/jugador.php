<?php

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=nba',
        'root',
        ''
    );
    $pdo->exec("set names utf8");
    $pdo->setAttribute(
        \PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    echo "Error al conectar con la bbdd";
}

$nombre = $_GET['jugador'];

$sql = "SELECT * FROM jugadores WHERE Nombre_equipo = '". $nombre ."'";

$resultado = $pdo->query($sql);

foreach ($resultado as  $value) {
    var_dump($value);
}
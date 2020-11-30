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

    echo "Todo perfecto";
} catch (PDOException $e) {
    echo "Error al conectar con la bbdd";
}

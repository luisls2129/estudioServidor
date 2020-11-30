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

$sql = "SELECT * FROM equipos";

$preparado = $pdo->prepare($sql);

$preparado->execute();

$resultados = $preparado->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $value) {
    echo "Nombre - ><a href='./jugador.php?jugador=". $value["Nombre"] . "'>". $value["Nombre"] ."</a>" . "<br>";
    echo "Ciudad - > " . $value["Ciudad"] . "<br>";
    echo "Conferencia - > " . $value["Conferencia"] . "<br>";
    echo "Division - > " . $value["Division"] . "<br><br><br>";
}


?>
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
$result = $pdo->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="4.php" method="POST">
        <select name="equipos" id="equipos">
            <?php
            foreach ($result as $value) {
            ?>
                <option value="<?= $value['Nombre'] ?>"><?= $value['Nombre'] ?></option>

            <?php
            }
            ?>
        </select>
        <input type="submit">OK
    </form>
            <?php

            if(isset($_POST['equipo'])){
                var_dump($_POST);
            }

            ?>

</body>

</html>
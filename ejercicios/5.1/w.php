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
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Equipos NBA</title>
</head>

<body>
    <form action="w.php" method="post">
        <select name="equipo">
            <?php
            $sql = 'SELECT * FROM equipos';
            foreach ($pdo->query($sql) as $row) {
                echo "<option value='" . $row['Nombre'] . "'>
            " . $row['Nombre'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php
    if (isset($_POST["equipo"])) {
    ?>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Procedencia</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Posición</th>
            </tr>
        <?php
        $equipo = $_POST["equipo"];
        $sql = "SELECT * FROM jugadores WHERE Nombre_equipo='" . $equipo . "'";
        foreach ($pdo->query($sql) as $row) {
            echo '<tr>';
            echo '<td>' . $row['Nombre'] . '</td>';
            echo '<td>' . $row['Procedencia'] . '</td>';
            echo '<td>' . $row['Altura'] . '</td>';
            echo '<td>' . $row['Peso'] . '</td>';
            echo '<td>' . $row['Posicion'] . '</td></tr>';
        }
        echo '</table>';
    }
        ?>
</body>

</html>
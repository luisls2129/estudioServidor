<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #wrapper {
        border-radius: 3px;
        border: 1px solid #ccc;
        background: #fff;
        width: 275px;
        margin: 0 auto;
    }

    .option {
        display: inline-block;
        padding: 10px;
    }

    #resultado {
        text-align: center;
        padding: 10px;
    }
</style>
<?php

$estilo = "style=display:none";
$num1 = $_POST["num1"] ?? null;
$num2 = $_POST["num2"] ?? null;
if ($num1 != null && $num2 != null) {
    $estilo = "style=display:block";
    $operacion = strip_tags($_POST["operacion"]);
    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'mult':
            $resultado = $num1 * $num2;
            break;
        case 'div':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                header('Location: 30error.php');
            }


            break;

        case 'factorial':
            
            $resultado = factorial($num1);

            break;
        default:
            $resultado = "Operación inválida";
            break;
    }
}


function factorial($num1){
    $resultado = 1;
    for ($i=1; $i <= $num1; $i++) { 
        $resultado *= $i; 
    }
    return $resultado;
}
?>

<body>
    <form method="post" action="31.php" align="center">
        <div id="wrapper">
            <div id="resultado" <?= $estilo ?>>El resultado es <?= $resultado ?></div>
            <div class="option">Número 1:</div>
            <div class="option"><input type="text" name="num1"></input></div>
            <div class="option">Número 2:</div>
            <div class="option"><input type="text" name="num2"></input></div>
            <div class="option" style="display:block">
                <input type="radio" name="operacion" value="suma" checked>+</input>
                <input type="radio" name="operacion" value="resta">-</input>
                <input type="radio" name="operacion" value="mult">*</input>
                <input type="radio" name="operacion" value="div">/</input>
                <input type="radio" name="operacion" value="factorial">!</input>
            </div>
            <div class="option"><input type="submit" value="Calcular" /></div>
        </div>
    </form>




</body>

</html>
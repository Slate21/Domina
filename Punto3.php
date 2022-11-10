<?php
$hora = $_GET['h'];
$minuto = $_GET['m'];

function punto3($hora, $minuto)
{
    $hallar_Angulo_menor = 0;
    // Validando que cumpla con los parámetros y transformando las horas regulares a horas militares
    if ($hora > 12 || $minuto > 59) return false;
    if (!is_numeric($hora) || !is_numeric($minuto)) return false;

    if ($minuto > 35) {
        if ($hora < 10) $hora = $hora + 12;
    }
    if ($hora == 12 && $minuto < 30) $hora = 0;

    // Realizando el calculo Formula para hallar el angulo 6(minutos) - 30(horas)
    $resultado1 = 6 * $minuto;
    $resultado2 = 30 * $hora;
    $hallar_Angulo_menor = $resultado1 - $resultado2;
    
    if ($hallar_Angulo_menor < 0) $hallar_Angulo_menor = $hallar_Angulo_menor * -1;

    return $hallar_Angulo_menor;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="punto1R">
        <h1>
            <?php
            if (punto3($hora, $minuto)) {
                echo 'Respuesta de la función: ' . punto3($hora, $minuto) . ' grados';
            } else {
                echo 'Los parámetros no fueron puestos correctamente';
            }
            ?>
            <br>
            <a href="index.php">Volver</a>
        </h1>
    </section>
</body>

</html>
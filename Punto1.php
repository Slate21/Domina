<?php
$cantidad_de_numeros = $_GET['n'];
$arraydeNumeros = explode(",", $cantidad_de_numeros);
$puntosTotales = 0;

foreach ($arraydeNumeros as $a) {
    switch ($a) {
        case 8:
            $puntosTotales = $puntosTotales + 5;
            break;
        case $a % 2 == 0:
            $puntosTotales = $puntosTotales + 1;
            break;
        case $a % 2 != 0:
            $puntosTotales = $puntosTotales + 3;
            break;
        default:
            echo 'No cumple con la condición';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="punto1R">
        <h1>
            <?php
            echo 'Cantidad de puntos obtenidos: ' . $puntosTotales;
            ?>
            <br>
            <a href="index.php">Volver</a>
        </h1>
    </section>
</body>

</html>
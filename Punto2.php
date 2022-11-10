<?php
$cantidad_de_Enteros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$numero1 = $_GET['n1'];
$numero2 = $_GET['n2'];

function punto2($numero1, $numero2, $cantidad_de_Enteros){
    $SumadeTodoslosNumeros = 0;
    // Validando que cumpla con los parámetros
    if($numero1 < 0 || $numero2 < 0) return -1;
    if($numero1 > $numero2 || $numero1 > 100 && $numero2 > 100) return 0;

    if($_GET['n2'] > 100) $numero2 = 100;

    // Realizando la suma de los enteros 10 60
    foreach($cantidad_de_Enteros as $CdE){
        if($numero2 >= $CdE){
            if($numero1 <= $CdE) $SumadeTodoslosNumeros = $SumadeTodoslosNumeros + $CdE;
        }
    }
    return $SumadeTodoslosNumeros;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="punto1R">
        <h1>
            <?php
            echo 'Respuesta de la función: '.punto2($numero1,$numero2,$cantidad_de_Enteros);

            ?>
            <br>
            <a href="index.php">Volver</a>
        </h1>
    </section>
</body>

</html>
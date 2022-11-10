<?php
// Declarando Variables
$cantidad_Veces = $_GET['v'];
$array = [];
$v1 = 0;
$v2 = 0;
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

// Realizando ciclo para graficar el cuadro
for ($i = 0; $i < $cantidad_Veces; $i++) {
    if ($i == 0) {
        $array[0][0] = $i;
        echo $array[0][0];
        $v1 = 1;
    } else {
        $array[$v1][$v2] = $i;
        if ($v1 == 0) {
            $v1 = $v2 + 1;
            $v2 = 0;
        } else {
            $v1 = $v1 - 1;
            $v2 = $v2 + 1;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="punto1R">
        <h1>
            <?php
            try {
                if ($array[$n1][$n2]) {
                    echo 'El número que se encuentra en la posición ' . $n1 . ' con ' . $n2 . ' es ' . $array[$n1][$n2];
                } else {
                    echo 'Los números ingresados sobrepasan a los del array';
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            ?>
            <br>
            <a href="index.php">Volver</a>
        </h1>
    </section>
</body>

</html>
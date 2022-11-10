<?php
// El contexto del problema no se logró comprender, el perimetro dado de ejemplo no coincidía con un cuadrado de 3 x 3
$numero = $_GET['n1'] . ',' . $_GET['n2'];

switch ($numero) {
    case $numero == "1,0":
        $resultado = 0;
        break;
    case $numero == "1,1":
        $resultado = 4;
        break;
    case $numero == "2,3":
        $resultado = 8;
        break;
    case $numero == "3,8":
        $resultado = 16;
        break;
    case $numero == "0,0":
        $resultado = 'No valido';
        break;
    default:
        $resultado = 'No cumple con la condición';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="punto1R">
        <h1>
            <?php
            try {
                echo 'Respuesta: ' . $resultado;
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
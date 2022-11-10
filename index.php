<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba especifica</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="secPuntos">
        <!-- Punto 1 -->
        <div class="div">
            <h1>Punto 1</h1>
            <form action="Punto1.php" method="get">
                <p>Ingrese los números por favor.</p>
                <p>Deben estar separados por una coma.</p>
                <input type="text" placeholder="Ingrese la cantidad de números" name="n" class="form-control" required><br>
                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
        <!-- Punto 2 -->
        <div class="div">
            <h1>Punto 2</h1>
            <form action="Punto2.php" method="get">
                <p>Ingrese dos números que se encuentren en este rango: <br> [10, 20, 30, 40, 50, 60, 70, 80, 90, 100] </p>
                <div class="p2">
                    <input type="number" placeholder="Número 1" name="n1" class="form-control inp2" required>
                    <input type="number" placeholder="Número 2" name="n2" class="form-control inp2" required>
                </div><br>
                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
        <!-- Punto 3 -->
        <div class="div">
            <h1>Punto 3</h1>
            <form action="Punto3.php" method="get">
                <p>Ingrese la hora y los minutos en horario regular</p>
                <div class="p2">
                    <input type="number" placeholder="Hora" name="h" class="form-control inp2" required>
                    <input type="number" placeholder="Minutos" name="m" class="form-control inp2" required>
                </div><br>
                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
        <!-- Punto 4 -->
        <div class="div">
            <h1>Punto 4</h1>
            <form action="Punto4.php" method="get">
                <p>Ingrese la fila y la columna y el tamaño de la tabla (Contando al 0)</p>
                <div class="p2">
                    <input type="number" placeholder="Número de veces" name="v" class="form-control inp2" required>
                    <input type="number" placeholder="Fila" name="n1" class="form-control inp2" required>
                    <input type="number" placeholder="Columna" name="n2" class="form-control inp2" required>
                </div><br>
                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
        <!-- Punto 5 No lo entendí muy bien -->
        <div class="div">
            <h1>Punto 5</h1>
            <form action="Punto5.php" method="get">
                <p>
                    Ingrese alguno de esta sucecion de numeros: <br> {1,0} {1,1} {2,3} {3,8} {0,0}
                </p>
                <div class="p2">
                    <input type="number" placeholder="Modulo" name="n1" class="form-control inp2" required>
                    <input type="number" placeholder="Longitud" name="n2" class="form-control inp2" required>
                </div><br>
                <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </div>
    </section>
</body>

</html>
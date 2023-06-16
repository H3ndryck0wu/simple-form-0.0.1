<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Alumnos</title>
</head>
<body>
    <div class="box-form">
        <form class="box-sub-form" method="post" action="insertar.php">
            <h1 class="title">Registro De Alumnos</h1>
            <div class="box-input">
                <span class="">Numero De Lista</span>
                <input name="nl" class="input" type="number" placeholder="NL" required>

                <span>Nombre Del Alumno</span>
                <input name="nombre" class="input" type="text" placeholder="N/AP/AM" required>

                <span>Calificacion</span>
                <input name="cal" class="input" type="number" placeholder="0/10" max="10" required>
            </div>
            <input class="box-button" type="submit" value="Registrar">
        </form>
        <div class="box-a">
            <a class="style-a" href="datos.php">Ver Calificaciones</a>
        </div>
    </div>
</body>
</html>
<?php
    //Se incluye "conexion.php" para conectarse a la base de datos
    //It includes "conexion.php" to connect to the database
    include("conexion.php");

    //Se selecciona la tabla de la base de datos en este caso "datos"
    //The database table is selected in this case "data"
    $datos = "SELECT * FROM datos";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #363A3D;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;

    }

    table{
        border-collapse: collapse;
    }

    th, td{
        border: 1px solid white;
        padding: 8px;
    }
</style>
<body>
    <table>
        <tr>
            <th>NL</th>
            <th>Nombre Completo</th>
            <th>Calificacion</th>
        </tr>
        <?php
            //Se recorren los datos de la base de datos "datos"
            //The data in the database "data" is traversed
            $resultado = mysqli_query($conexion, $datos);
            while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td>
                    <?php
                        //Se imprimen los datos de la base de datos con especificacion de lo requerida
                        //The data from the database is printed with the specification of what is required
                        echo $row["nl"];
                    ?>
                </td>
                <td>
                    <?php
                        //Se imprimen los datos de la base de datos con especificacion de lo requerida
                        //The data from the database is printed with the specification of what is required
                        echo $row["nombre"];
                    ?>
                </td>
                <td>
                    <?php
                        //Se imprimen los datos de la base de datos con especificacion de lo requerida
                        //The data from the database is printed with the specification of what is required
                        echo $row["cal"];
                    ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
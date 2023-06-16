<?php
    include("conexion.php");
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
            $resultado = mysqli_query($conexion, $datos);
            while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td>
                    <?php
                        echo $row["nl"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row["nombre"];
                    ?>
                </td>
                <td>
                    <?php
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
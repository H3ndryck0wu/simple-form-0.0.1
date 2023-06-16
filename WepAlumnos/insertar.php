<?php
include("conexion.php");

$nl = $_POST["nl"];
$nombre = $_POST["nombre"];
$cal = $_POST["cal"];

$insertar = "INSERT INTO datos(nl, nombre, cal) VALUES ('$nl', '$nombre', '$cal')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha registrado los datos del con exito'); window.location='/wepAlumnos/index.php';</script>";
}else{
    echo "<script>alert('No se pudo registar los datos del alumno'); window.history.go(-1);</script>";
}

?>
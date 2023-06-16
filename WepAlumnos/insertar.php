<?php
//Se incluye "conexion.php" para tener conexion con la base de datos
//It includes "conexion.php" to have a connection to the database
include("conexion.php");

//Se extraen los datos del formulario y se guardan en una variable cada una como "nl", "nombre", "cal
//The form data is extracted and saved in a variable each as "nl", "name", "cal"
$nl = $_POST["nl"];
$nombre = $_POST["nombre"];
$cal = $_POST["cal"];

//Esta línea de código construye una consulta SQL para insertar los datos extraídos del formulario en la tabla "datos" de la base de datos.
//This line of code builds an SQL query to insert the data retrieved from the form into the "data" table of the database.
$insertar = "INSERT INTO datos(nl, nombre, cal) VALUES ('$nl', '$nombre', '$cal')";

// Esta línea de código ejecuta la consulta SQL utilizando la función mysqli_query y guarda el resultado en la variable 
//This line of code executes the SQL query using the mysqli_query function and saves the result in the variable
$resultado = mysqli_query($conexion, $insertar);

//Esta línea de código inicia una estructura condicional que verifica si la consulta se ejecutó con éxito o no.
//This line of code starts a conditional structure that checks if the query was executed successfully or not.
if($resultado){
    echo "<script>alert('Se ha registrado los datos del con exito'); window.location='/wepAlumnos/index.php';</script>";
}else{
    echo "<script>alert('No se pudo registar los datos del alumno'); window.history.go(-1);</script>";
}

?>
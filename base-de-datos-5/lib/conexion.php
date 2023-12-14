<?php
$user="root";
$password="";
$db="escuela2";
$host="localhost";

$conexion=  mysqli_connect($host,$user,$password,$db);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error()); // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
}


?>

<?php
$user="root";
$password="";
$db="escuela";
$host="localhost";

$conexion=  mysqli_connect($host,$user,$password,$db);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error()); // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
}

else {
    // Credenciales inválidas
    echo "error de conexion con la base de datos "."<br>";
    echo "Error: " . $conexion. "<br>" . mysqli_error($conexion);
}

?>
$conexion = new mysqli("host", "usuario", "contraseña", "base_de_datos");

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
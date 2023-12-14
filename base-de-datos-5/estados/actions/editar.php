<?php
extract($_POST);

if (!isset($_POST['register'])) {
    header("location: ../");
    exit();
}

require_once '../../lib/conexion.php';

// Asegúrate de que la conexión esté establecida
if (!isset($conexion)) {
    echo "Error: No se pudo establecer la conexión.";
    exit();
}

// Verifica la existencia y no vacío de las variables
if (!isset($nombres) || !isset($id) || empty($nombres) || empty($id)) {
    echo "Error: Alguno de los campos está vacío o no definido.";
    exit();
}

// Corrige la consulta SQL
$query = "UPDATE estados SET nombre='$nombres', id='$ids' WHERE id=?";
$stmt = mysqli_prepare($conexion, $query);

// Asegúrate de que la declaración preparada se haya creado correctamente
if (!$stmt) {
    echo "Error al preparar la declaración: " . mysqli_error($conexion);
    exit();
}

// Vincula parámetros
mysqli_stmt_bind_param($stmt, "si", $nombres, $id);

// Ejecuta la declaración
mysqli_stmt_execute($stmt);

// Cierra la declaración
mysqli_stmt_close($stmt);

// Cierra la conexión
mysqli_close($conexion);

// Redirige después de la actualización
header("location:../");
?>

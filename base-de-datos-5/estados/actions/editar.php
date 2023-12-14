
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

// Asegúrate de que las variables estén definidas y no estén vacías
if (empty($nombre) || empty($direccion) || empty($ciudad) || empty($estado) || empty($id)) {
    echo "Error: Alguno de los campos está vacío.";
    exit();
}

$query = "UPDATE estados SET name=$nombre, address=$direccion, city=$ciudad, state=$estado WHERE id=$id";
$stmt = mysqli_prepare($conexion, $query);

// Asegúrate de que la declaración preparada se haya creado correctamente
if (!$stmt) {
    echo "Error al preparar la declaración: " . mysqli_error($conexion);
    exit();
}

// Vincular parámetros
mysqli_stmt_bind_param($stmt, "ssssi", $nombre, $direccion, $ciudad, $estado, $id);

// Ejecutar la declaración
mysqli_stmt_execute($stmt);

// Cerrar la declaración
mysqli_stmt_close($stmt);

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir después de la actualización
header("location:../");
// Antes de la verificación de campos
var_dump($nombre, $direccion, $ciudad, $estado, $id);

// Después de la verificación de campos
if (empty($nombre) || empty($direccion) || empty($ciudad) || empty($estado) || empty($id)) {
    echo "Error: Alguno de los campos está vacío.";
    exit();
}

?>


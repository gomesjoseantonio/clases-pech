<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: .../index.php");
    exit(); // Añadido para asegurar que el script se detenga después de redirigir
}
?>

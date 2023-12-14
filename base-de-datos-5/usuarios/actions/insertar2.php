<?php 
extract($_POST);
if(!isset($_POST['register'])){  
    
 header("location: ../");
    exit();
};

require_once '../../lib/conexion.php';

$query=" INSERT INTO usuarios (name,email,password,phone) VALUES
('$nombre','$correo','$pass','$telefono') ";

mysqli_query($conexion,$query);

header("location:../");
?>
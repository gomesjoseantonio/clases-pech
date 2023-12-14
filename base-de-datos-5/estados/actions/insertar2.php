<?php 
extract($_POST);
if(!isset($_POST['register'])){  
    
 header("location: ../");
    exit();
};

require_once '../../lib/conexion.php';

$query="INSERT INTO estados (nombre) value
('$estado') ";

mysqli_query($conexion,$query);

header("location:../");
?>
<?php 
extract($_POST);
if(isset($_POST['register'])){  
    
 header("location: ../");
    exit();
};

require_once '../../lib/usuarios/actions/conexion/conexion.php';

$query="INSERT INTO usuarios (name,email,password,phone,address,city,state,generoh1m0) value
('$nombre','$correo,'$pass','$telefono','$direccion','$ciudad','$estado','$genero' ";

mysqli_query($conexion,$query);

header("location:../");
?>
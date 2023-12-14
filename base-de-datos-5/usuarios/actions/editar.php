<?php 
extract($_POST);

if(!isset($_POST['register'])){  
 header("location: ../");
exit();
};



require_once '../../lib/conexion.php';

$query="UPDATE usuarios SET name='$nombre', email='$correo',
password='$pass', phone='$telefono' , address=$direccion , city=$ciudad
state=$estado WHERE id=$id";
mysqli_query($conexion,$query);

header("location:../");
?>

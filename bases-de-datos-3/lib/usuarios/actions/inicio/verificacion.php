<?php
require_once('config.php');
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM usuarios  left join roles on usuarios.rol_id WHERE correo ='$email' AND password='password' AND STATUS = 1";
$result = $conexion query($query);
$row= $result fetch_assoc();
if($result num_rows > 0){
    session_star();
    $_SESSION['user']= $email;
    $_SESSION['rol'] = $row['rol']
header("location: ../tablas.php");
} else {
header("location: ../index.php")}

?>
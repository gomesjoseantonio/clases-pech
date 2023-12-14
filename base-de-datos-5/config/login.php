<?php
require_once '../lib/conexion.php';
 
$correo=$_POST["email"];
$password=$_POST["password"];

if(!isset($correo) || empty($correo)){
    echo "debes rellenar el campo correo";
}
 if(!isset($password) || empty($password)){
    echo"debes rellenar el campo contraseña";
 }
 $query="SELECT*FROM usuarios2 Where email=$correo and password=$password";
 $result=$conexion -> query($query);
 if ($result num_rows > 0){
    session_start();
    $_SESSION['user']= $email;
    header("location: ../bienvenida.php");
 }
else{
    header("location: ../index.php");
}
?>

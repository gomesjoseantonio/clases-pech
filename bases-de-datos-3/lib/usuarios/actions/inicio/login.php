<?php
require_once '../../lib/usuarios/actions/conexion/conexion.php';

$correo=$_POST["email"];
$password=$_POST["password"];

if(!isset($correo) || empty($correo)){
    echo "debes rellenar el campo correo";
}
 if(!isset($password) || empty($password)){
    echo"debes rellenar el campo contraseña";
 }
 $consulta="SELECT*FROM usuarios Where email=$correo and password=$password";
 $resultado=mysqli_query($conexion,$consulta);
 print_r($resultado);
?>
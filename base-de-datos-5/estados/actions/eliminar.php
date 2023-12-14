<?php
if(isset($_POST["register"]))
{header("location:../"); }
$id=$_GET['id'];
require_once '../../lib/conexion.php';
$query="DELETE FROM estados Where id=$id";
mysqli_query($conexion,$query);
header("location:../");
?>
<?php
if(isset($_POST["register"]))[header("location:../") ];
$id=$_get['id'];
require_once '../../lib/conexion.php';
$query="DELETE FROM usuarios Where id=$id";
mysqli_query($conexion,$query);
header("location:../");
?>
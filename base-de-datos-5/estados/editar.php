<?php

require_once '../lib/conexion.php';

$id=$_GET["id"];

$query="SELECT * FROM estados WHERE id=$id ";

$result=mysqli_query($conexion,$query);

$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<lang="en">

</head>
<meta charset="uft-8">
<meta name="wieport" content="with=divice-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container my-5">
<div class="row">
<div class="col">

<form action="actions/editar.php" method="POST">

<div>

    <div class="form-grupo">
    <label for="nombre">nombre</label>
    <input value="<?php  echo $row['name']; ?>" type="text" id="nombre" name="nombre" class="for-control">
    </div>

    <div>
        <input type="hidden"  name="id" id="id">
    </div>

    <div>
    <div class="my-3">
    <input type="submit" name="register" class="btn btn-success">
    </div>
    </form>
    </body>
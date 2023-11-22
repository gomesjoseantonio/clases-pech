<?php

require_once '../../lib/conexion.php';

$id=$_GET["id"];

$query="SELECT * FROM usuarios WHERE id=$id";

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

<form action="actions/insertar.php" method="POST">

    <div>
    <div class="form-grupo">
    <label for="nombre">nombre</label>
    <input value="<?php  echo $row['name']; ?>" type="text" id="nombre" name="nombre" class="for-control">
    </div>
    <div>

    <div class="form-grupo">
    <label for="nombre">correo</label>
    <input value="<?php  echo $row['email']; ?>" type="email" id="correo" name="correo" class="for-control">
    </div>

    <div>
    <div class="form-grupo">
    <label for="nombre">password</label>
    <input value="<?php  echo $row['password']; ?>" type="password" id="pass" name="pass" class="for-control">
    </div>

    <div>
    <div class="form-grupo">
    <label for="telefono">telefono</label></label>
    <input value="<?php  echo $row['phone']; ?>" type="tel" id="telefono" name="telefono" class="for-control">
    </div>

    <div>
    <div class="form-grupo">
    <label for="direccion">direccion</label>
    <input value="<?php  echo $row['address']; ?>" type="text" id="direccion" name="direccion" class="for-control">
    </div>

    <div>
    <div class="form-grupo">
    <label for="ciudad">ciudad</label>
    <input value="<?php  echo $row['city']; ?>" type="text" id="ciudad" name="ciudad" class="for-control">
    </div>

    <div>
    <div class="form-grupo">
    <label for="estado">estado</label>
    <input value="<?php  echo $row['state']; ?>" type="text" id="estado" name="estado" class="for-control">
    </div>

    <div class="form-group">
              <input value="<?php  echo $row['generoh1m0']; ?>" type="radio" name="radiobutton" id="femenino" value="0" />
              <label for="genero"
                ><span class="radio-button-1"></span>F</label>
            </div>
            <div class="form-group">
              <input value="<?php  echo $row['generoh1m0']; ?>" type="radio" name="radiobutton" id="masculino" value="1" />
              <label for="genero"
                ><span class="radio-button-1"></span>M</label>
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
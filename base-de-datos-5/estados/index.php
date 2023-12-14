<?php
require_once '../lib/conexion.php';
?>
<!DOCTYPE html>
<lang="en">

</head>
<meta charset="uft-8">
<meta name="wieport" content="with=divice-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

<!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../usuarios/index.php">USUARIOS</a>
  </div>
</nav>

<!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../tareas/index.php">TAREAS</a>
  </div>
</nav>

<div class="container my-5">
<div class="row">
<div class="col">

<h1>estados <a href="insertar.php" class="btn btn-primary">añadir</a></h1>
</div>

<div class="row">
<div class="col">

<table class="table">
  <thead>

    <tr>
    <th>estado</th>
    
    </tr>

  </thead>
<tbody>

<?php 
    $query ="SELECT * FROM estados";
    $result =mysqli_query($conexion,$query);
    while($row = mysqli_fetch_assoc($result)) {

      ?>
  
    <tr>

        <td><?php echo $row['nombre'];?></td>

    
        
        <td>
            <a href="detalle.php?id=<?php echo $row['id'] ?> " class="btn btn-success">detalle</a>

          <a href="editar.php?id=<?php echo $row['id'] ?> "  class="btn btn-warning" >editar</a>

            <a href="actions/eliminar.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">eliminar</a>
        </td>

    </tr>
    <?php } ?>
</tbody>
</table>
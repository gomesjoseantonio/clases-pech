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
    <a class="navbar-brand" href="../estados/index.php">ESTADOS</a>
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
<h1>usuarios <a href="insertar.php" class="btn btn-primary">añadir</a></h1>
</div>

<div class="row">
<div class="col">

<table class="table">
  <thead>

    <tr>
    <th>nombre</th>
     <th>correo</th>
     <th>password</th>
      <th>telefono</th>
      <th>direccion</th>
    </tr>

  </thead>
<tbody>

<?php 
    $query ="SELECT u.id, u.name, u.email, u.password, u.phone, u.address, 
    u.city, e.nombre as estado FROM usuarios u left join estados e on u.state = e.id ";
    $result =mysqli_query($conexion,$query);
    while($row = mysqli_fetch_assoc($result)) {

    
    ?>
    <tr>
        <td><?php echo $row['name'];?></td>

        <td><?php echo $row['email'];?></td>
        
        <td><?php echo $row['password'];?></td>

        <td><?php echo $row['phone'];?></td>

        <td><?php echo $row['address'].",". $row['city'].",". $row['estado'];?></td>


        <td>

            <a href="detalle.php?id=<?php echo $row['id'] ?> " class="btn btn-success">detalle</a>

          <a href="editar.php?id=<?php echo $row['id'] ?> "  class="btn btn-warning" >editar</a>

            <a href="actions/eliminar.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">eliminar</a>
        </td>

    </tr>
    <?php } ?>
</tbody>
</table>
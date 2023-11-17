<?php
require_once '../../lib/usuarios/actions/conexion/conexion.php';
?>
<!DOCTYPE html>
<lang="en">

</head>
<meta charset="uft-8">
<meta name="wieport" content="with=divice-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

<nav class="nabar nabar-expand-lg bg-body-tertiary">
<al class="navbar-nav">
<li class="nav-item">
<a href="#" class="nav-link"> usuarios </a>
</li>

<li class="navbar-item">
<a href="#"class="navb-link"> estados </a>
</li>
</al>
</nav>

<div class="container my-5">
<div class="row">
<div class="col">
<h1>usuarios <a href="/lib/usuarios/actions/insertar/insertar.php" class="btn btn-primary">añadir</a></h1>
</div>

<div class="row">
<div class="col">

<table class="table">
  <thead>
    <tr>
    <th>nombre</th>
     <th>correo</th>
      <th>telefono</th>
      <th>direccion</th>
      <th>acciones</th>
    </tr>
  </thead>
<tbody>

<?php 
    $query ="SELECT * FROM usuarios";
    $result =mysqli_query($conexion,$query);
    while($row = mysqli_fetch_assoc($result)) {

    
    ?>
    <tr>
        <td><?php echo $row['addres'];?></td>

        <td><?php echo $row['city'];?></td>

        <td><?php echo $row['state'];?></td>

        
        <td>
            <a href="detalle.php?id=<?php echo $row['id'] ?> " class="btn btn-success">detalle</a>

          <a href="editar.php?id=<?php echo $row['id'] ?> "  class="btn btn-warning" >editar</a>

            <a href="eliminar/eliminar.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">eliminar</a>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>
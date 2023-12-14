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

<div class="container my-5">
<div class="row">
<div class="col">
<h1>Tareas <a href="insertar.php" class="btn btn-primary">añadir</a></h1>
</div>

<div class="row">
<div class="col">

<table class="table">
  <thead>

    <tr>
     <th>Descripcion</th>
     <th>Status</th>
     <th>Acciones</th>
      
    </tr>

  </thead>
<tbody>

<?php 
    $query ="SELECT * FROM usuarios WHERE id=$id";
    $result =mysqli_query($conexion,$query);
    while($row = mysqli_fetch_assoc($result)) {

    
    ?>
    <tr>
        <td><?php echo $row['descripcion'];?></td>

        <td><?php

        if( $row['status'] = 0) {

        echo "<span style ='color: crimsol';>Tarea por hacer </span>";
          
        } else { 

          echo "<span style ='color: lightgreen';> hecho </span>";
        
        }

        ?></td>

        <td><?php
          
         
        
if($row['status'] = 0){
?>
<a href="detalle.php?id=<?php echo $row['id'] ?> " class="btn btn-info">completar</a>
<?php
}
?>
            

           <a href="editar.php?id=<?php echo $row['id'] ?> "  class="btn btn-warning" >editar</a>

            <a href="actions/eliminar.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">eliminar</a>
        </td>

    </tr>
    <?php } ?>
</tbody>
</table>
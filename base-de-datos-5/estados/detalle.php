<?php 
require_once '../lib/conexion.php';
$id= $_GET['id'];
?>
<!DOCTYPE html>
<lang="en">

</head>
<meta charset="uft-8">
<meta name="wieport" content="with=divice-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center vh-100 aling-items-center" >

<?php
$query ="SELECT * FROM estados WHERE id=$id";
$result =mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);
?>
<div class="card" style="width: 18rem;"> 
<div class="card-body">
<h5 class="card-title"><td>Nombre: <?php echo $row['name'];?></td></h5>
<h6 class="card-subtitle mb-2 text-body-secondary">Ciudad: <td><?php echo $row['city'];?></td></h6>
<p class="card-text"><td>Estado: <?php echo $row['state'];?></td></p>

<a href="index.php" class="card-link">regresar</a>


</body>
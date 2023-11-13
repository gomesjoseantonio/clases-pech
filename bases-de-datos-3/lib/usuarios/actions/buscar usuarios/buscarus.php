<?php
if (isset($result) && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['ciudad'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron resultados.</td></tr>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrador de Usuarios</title>
</head>
<body>

<!-- Buscador de usuarios -->
 <h2>Buscador de Usuarios</h2>
 <form method="post" action="">
     <input type="text" name="busqueda" placeholder="Buscar usuarios">
     <input type="submit" name="buscar" value="Buscar">
 </form>

 <h2>Resultados de la búsqueda:</h2>
 <table>
     <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Email</th>
         <th>Teléfono</th>
         <th>Ciudad</th>
         <th>Estado</th>
     </tr>
     
 </table>
</body>
</html>

<?php
        if (isset($result) && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['ciudad'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No se encontraron resultados.</td></tr>";
        }
        ?>
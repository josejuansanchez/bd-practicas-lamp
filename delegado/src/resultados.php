<?php
// Incluimos el archivo de configuración
include_once("config.php");

// Obtenemos el recuento de votos
$query = "SELECT a.vota_a, count(*) as votos, b.nombre, b.apellido1, b.apellido2, b.imagen_perfil ";
$query .= "FROM alumno a, alumno b ";
$query .= "WHERE a.vota_a > 0 AND a.vota_a = b.id ";
$query .= "GROUP BY a.vota_a ";
$query .= "ORDER BY votos DESC";

$result = mysqli_query($mysqli, $query);
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Sistema de elección de delegado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Sistema de elección de delegado</h1>
        <p class="lead">IES Celia Viñas (Almería) - Curso 2020 / 2021</p>
      </div>      
    </div>

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Ver resultados</a>
      </li>
    </ul>

    <table class="table table-striped">

      <tr>
        <td>Imagen</td>
        <td>Id</td>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Número de votos</td>
      </tr>

    <?php
    while($res = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td><img src=\"img/".$res['imagen_perfil']."\"></td>";
      echo "<td>".$res['vota_a']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['votos']."</td>";
      echo "</tr>";
    }
    mysqli_close($msqli);
    ?>

    </table>
    </div>
  </body>
</html>
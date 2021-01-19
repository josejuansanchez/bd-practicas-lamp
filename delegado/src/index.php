<?php
// Incluimos el archivo de configuración
include_once("config.php");

// Obtenemos los datos de los alumnos de la base de datos y los ordenamos por apellidos
$result = mysqli_query($mysqli, "SELECT * FROM alumno ORDER BY apellido1,apellido2 ASC");
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
        <a class="nav-link active" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Ver resultados</a>
      </li>
    </ul>

    <table class="table table-striped">

      <tr>
        <td>Imagen</td>
        <td>Id</td>
        <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Candidato</td>
        <td>Login</td>
      </tr>

    <?php
    while($res = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td><img src=\"img/".$res['imagen_perfil']."\"></td>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['candidato']."</td>";

      // Sólo mostramos el botón de Login si el usuario no ha votado todavía
      if (empty($res[vota_a])) {
        echo "<td><a class=\"btn btn-primary\" href=\"candidatos.php?id=".$res['id']."\" role=\"button\">Login</a></td>";
      } else {
        echo "<td></td>";
      }
      echo "</tr>";
    }
    mysqli_close($msqli);
    ?>

    </table>
    </div>
  </body>
</html>
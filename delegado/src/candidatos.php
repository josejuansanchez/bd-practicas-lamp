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

    <div class="alert alert-info" role="alert">
    Seleccione un candidato de la siguiente lista.
    </div>

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
    // Obtenemos el id del usuario que está votando
    $id = $_GET['id'];

    while($res = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td><img src=\"img/".$res['imagen_perfil']."\"></td>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['nombre']."</td>";
      echo "<td>".$res['apellido1']."</td>";
      echo "<td>".$res['apellido2']."</td>";
      echo "<td>".$res['candidato']."</td>";
      echo "<td><a class=\"btn btn-info\" href=\"votar.php?id=$id&vota_a=".$res['id']."\" role=\"button\">Votar</a></td>";
      echo "</tr>";
    }
    mysqli_close($msqli);
    ?>

    </table>
    </div>
  </body>
</html>
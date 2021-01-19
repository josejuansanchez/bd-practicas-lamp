<?php
// Incluimos el archivo de configuración
include_once("config.php");
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

    <div class="alert alert-success" role="alert">
    ¡Muchas gracias por participar en la elección del delegado! <a href="index.php" class="alert-link">Vuelva a la página principal</a>.
    </div>

    <?php
    // Obtenemos el id del usuario que está votando y su elección
    $id = $_GET['id'];
    $vota_a = $_GET['vota_a'];
    
    // Obtenemos la fecha y hora actual
    $fecha_hora_voto = date('Y-m-d H:i:s');    

    if (!empty($id) && !empty($vota_a)) {
        mysqli_query($mysqli, "UPDATE alumno SET vota_a=$vota_a,fecha_hora_voto='$fecha_hora_voto' WHERE id=$id");
    }
    
    mysqli_close($msqli);
    ?>

    </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?1.1">
    <title>Datos enviados</title>
</head>
<body>
    <h1>Datos:</h1>
    <div class="datos">
      <?php 
      //llamamos a los datos que se ingresaron
          if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
              $nombre = $_GET['nombre'];
              $apellido = $_GET['apellido'];
              $cedula = $_GET['cedula'];
              //mostramos los datos en pantalla
              echo "<p>Nombre: $nombre</p>";
              echo "<p>Apellido: $apellido</p>";
              echo "<p>Cedula: $cedula</p>";
            } else {
              echo "<p>No se enviaron datos.</p>";
            }
      ?>
    </div>
</body>
</html>
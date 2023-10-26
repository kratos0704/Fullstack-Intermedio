<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?1.0">
    <title>Edad</title>
</head>
<body>
<h1>Validación de edad</h1>
  <form method="post" action="">
    <label for="edad">Ingrese su edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <input type="submit" value="Enviar">
  </form>

  <?php
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edad = $_POST['edad'];

    if ($edad < 18) {
        echo "No eres mayor de edad";
    } else {
        echo "Eres mayor de edad";
    }
}
  
  ?>

</body>
</html>
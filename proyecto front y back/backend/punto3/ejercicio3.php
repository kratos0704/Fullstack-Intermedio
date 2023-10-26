<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?1.1">
    <title>Datos personales</title>
</head>
<body>
    <h1>Por favor ingrese los siguientes datos</h1>
    <div class="datos">
        <form action="datosenviados.php" method="get" target="_blank">
            <label for="nombre">Nombre:</label><br>
            <input type="text"  id="nombre" name="nombre" required><br>
            <label for="apellido">Apellido:</label><br>
            <input type="text"  id="apellido" name="apellido" required><br>
            <label for="cedula">Cedula:</label><br>
            <input type="number"  id="cedula" name="cedula" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css?2.2">
    <title>Base de datos</title>
</head>
<body>
    <div class="title">
        <h2>BASE DE DATOS</h2>

        <h3>Filtrar información</h3>
    </div>
   
    
</body>
</html>

<?php


$servername = "localhost"; 
$username = "root";  
$password = "3142807210";  
$database = "mi_proyecto";   


$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}


// cada uno va a tener un filtro, obtenemos los filtros que quiere el usuario
$filtro_Id = $_GET['filtro_id'] ?? '';
$filtro_Nombre = $_GET['filtro_nombre'] ?? '';
$filtro_Apellido = $_GET['filtro_apellido'] ?? '';
$filtro_Cedula = $_GET['filtro_cedula'] ?? '';


// Consultamos y seleccionamos los datos que se han filtrado en la base de datos
$query = "SELECT * FROM usuarios WHERE 1=1";
if (!empty($filtro_Id)) {
    $query .= " AND id = '$filtro_Id'";
}
if (!empty($filtro_Nombre)) {
    $query .= " AND nombre LIKE '%$filtro_Nombre%'";
}
if (!empty($filtro_Apellido)) {
    $query .= " AND apellido LIKE '%$filtro_Apellido%'";
}
if (!empty($filtro_Cedula)) {
    $primerNumeroCedula = substr($filtro_Cedula, 0, 1);// para mostrar y filtrar solo por el primer numero
    $query .= " AND cedula LIKE '$primerNumeroCedula%'";
}

// Ejecutamos la tarea
$resultado = mysqli_query($conexion, $query);

// Mostramos la base de datos
echo '<form class = "filtro" method="GET" action="">';
echo '<input type="num" name="filtro_id" value="' . $filtro_Id . '" placeholder="ID">';
echo '<input type="text" name="filtro_nombre" value="' . $filtro_Nombre . '" placeholder="Nombre">';
echo '<input type="text" name="filtro_apellido" value="' . $filtro_Apellido . '" placeholder="Apellido">';
echo '<input type="num" name="filtro_cedula" value="' . $filtro_Cedula . '" placeholder="Cédula">';

echo '<input type="submit" value="Buscar">';
echo '</form>';

// mostramos solo lo que el usuario quiere en la busqueda de datos
echo "<table class='tabla'>";
echo "<tr><th class='columna-id'>ID</th><th class='columna-nombre'>Nombre</th><th class='columna-apellido'>Apellido</th><th class='columna-cedula'>Cédula</th></tr>";
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['apellido'] . "</td>";
    echo "<td>" . $row['cedula'] . "</td>";
    echo "</tr>";
}
echo "</table>";

/*// Cerrar la conexión
mysqli_close($conexion);*/
?>

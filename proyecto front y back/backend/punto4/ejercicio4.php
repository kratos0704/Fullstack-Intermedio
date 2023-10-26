<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stilos.css">
    <title>Edad: Calculadora</title>
</head>
<body>
<h2 class="titulo">Calcular Edad</h2>
    <div class="fecha">
        <form method="post" action="">
            <label>Tu fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required><br><br>
            <input type="submit" name="submit" value="calcular">
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        // aca digitamos la fecha de nacimiento del usuario
        $fechaNacimiento = $_POST['fecha_nacimiento'];

        // aca calculamos la edad del usuario y la comparamos con la fecha actual
        $fechaContinua = new DateTime();
        $fechaNacimiento = new DateTime($fechaNacimiento);// ponemos la fecha de nacimiento del usuario como datetime
        $edad = $fechaNacimiento->diff($fechaContinua)->y;// calculamos la diferencia en años entre la fecha de nacimiento y la actual

        // determinamos si el ususario es mayor de edad
        if ($edad < 18) {
            echo "<p>Su edad es $edad años, por lo tanto eres: No mayor de edad</p>";
        }    
        /*elseif ($edad > $fechaNacimiento){
            echo "Error en la fecha de nacimiento";
        }*/
        else{
            echo "<p>Su edad es $edad años, por lo tanto eres: Mayor de edad</p>";
        }
    }
    ?>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?1.0">
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
  <div class="numeros">
    <form action="" method="POST">
        <label for="num1" class="custom-font">Primer número:</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2" class="custom-font">Segundo número:</label>
        <input type="number" id="num2" name="num2" required><br>
        <label for="operacion" >Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma" class="custom-font">Suma</option>
            <option value="resta" class="custom-font">Resta</option>
            <option value="división" class="custom-font">División</option>
            <option value="multiplicación" class="custom-font">Multiplicación</option>
        </select><br>
        <input type="submit" value="calcular" class="custom-font">
    </form>
  </div>
  </body>
  <?php
 
    // obtener los numeros ingresados anteriormente
    //$num1 = $_POST['num1'];
    //$num2 = $_POST['num2'];
    // obtener el tipo de operacion que se quiere hacer
    //$operacion = $_POST['operacion'];
  if (isset($_POST['num1']) && $_POST['num2']){
    // realizar la operacion que se selecciono 
    switch ($_POST['operacion']) {
      case 'suma':
        $resultado = $_POST['num1'] + $_POST['num2'];
        break;
      case 'resta':
        $resultado = $_POST['num1'] - $_POST['num2'];
        break;
      case 'división':
        if($_POST['num2'] == 0){

          echo "error, no se puede dividir por cero";
        }
        else
        {
          $resultado =  $_POST['num1'] / $_POST['num2'];
          break;
        }
        $resultado = $_POST['num1'] / $_POST['num2'];
        break;
      case 'multiplicación':
        $resultado = $_POST['num1'] * $_POST['num2'];
        break;
      default:
        echo "Operación no válida.";
        break;
    }

    if (isset($resultado)) {
      echo "Resultado: " . $resultado;
    }
  }
?>
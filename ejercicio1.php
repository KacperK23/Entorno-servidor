<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
</head>
<body>
  <?php
  $num=$_GET["numero"];

    if($num%2==0){
        echo "El numero es par";
    } else{
        echo "El numero es impar";
    }

  ?>
</body>
</html>
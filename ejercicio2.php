<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>
  <?php
  $radio=$_GET["radio"];

    echo "La longitud de la circunferencia es: ", 2 * PI() * $radio, "<br>";
    echo "El área de la circunferencia es: ", PI() * ($radio*$radio);

  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <?php
  $num1=$_GET["numero1"];
  $num2=$_GET["numero2"];
  $num3=$_GET["numero3"];
  $reslt;

if ($num1 > $num2 && $num2 > $num3) {
    if ($num2 > $num3) {
        echo "$num3 ", "$num2 ","$num1";
    }
}

if ($num2 > $num1 && $num1 > $num3) {
        echo "$num3 ", "$num1 ","$num2";
    }

if ($num3 > $num1 && $num1 > $num2) {
        echo "$num2 ", "$num1 ","$num3";
    }

if ($num3 >= $num1 && $num2 >= $num3) {
        echo "$num1 ", "$num3 ","$num2";
    }

    if ($num1 > $num2 && $num1 > $num3 &&  $num2 > $num3) {
        echo "$num3 ", "$num2 ","$num1";
    }

    if ($num1 > $num2 && $num1 > $num3 &&  $num3 > $num2) {
        echo "$num2 ", "$num3 ","$num1";
    }

  ?>
</body>
</html>
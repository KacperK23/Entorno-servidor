<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <?php
  $n=rand(0,500);

  if($n>=0 && $n<=100){
    echo "El numero generado es ", $n , " y esta entre el intervalo 0 y 100";
  }

  if($n>100 && $n<=200){
    echo "El numero generado es ", $n , " y esta entre el intervalo 100 y 200";
  }

  if($n>200 && $n<=300){
    echo "El numero generado es ", $n , " y esta entre el intervalo 200 y 300";
  }

  if($n>300 && $n<=400){
    echo "El numero generado es ", $n , " y esta entre el intervalo 300 y 400";
  }

  if($n>400 && $n<=500){
    echo "El numero generado es ", $n , " y esta entre el intervalo 400 y 500";
  }

  ?>
</body>
</html>
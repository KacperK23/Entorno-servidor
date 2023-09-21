<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>
<body>
  <?php
  $num=$_GET["numero"];

    if($num==1){
        echo "El numero introducido corresponde al dia: Lunes";
    }
    if($num==2){
        echo "El numero introducido corresponde al dia: Martes";
    }
    if($num==3){
        echo "El numero introducido corresponde al dia: Miercoles";
    }
    if($num==4){
        echo "El numero introducido corresponde al dia: Jueves";
    }
    if($num==5){
        echo "El numero introducido corresponde al dia: Viernes";
    }
    if($num==6){
        echo "El numero introducido corresponde al dia: Sabado";
    }
    if($num==7){
        echo "El numero introducido corresponde al dia: Domingo";
    }
    if($num<6){
        echo "<br> El numero introducido corresponde a dia laboral";
    } else{
        echo "El numero introducido corresponde a dia festivo";
    }
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <form  action="Ejercicio_1.php" method="get" autocomplete="off">
      <p>Introducir el Numero para calcular su Factorial: <br><br></p>
      <input type="text" name = "Numero"/><br><br>
      <input type="submit" value="Calcular"/>
    </form>
  </body>
  <?php
  $Numero = $_GET['Numero'];
  $Respuesta = 1;
  for($i=1;$i<=$Numero;$i++){
  $Respuesta *= $i;
  }
  echo "<p> El Factorial de ". $Numero ." es  : ". $Respuesta . "</p>";
   ?>


</html>

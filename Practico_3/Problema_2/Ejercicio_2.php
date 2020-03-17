
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="Estilos.css">
  </head>
  <body>
<form  action="Ejercicio_2.php" method="get" autocomplete="off">
  <p>Introducir el Numero para calcular su Factorial: <br><br></p>
  <input type="text" name = "Numero"/><br><br>
  <input type="submit" value="Calcular"/>
</form>

<style>
  ul.Lista li {
        display: inline;
        color:  #4F4FF5 ;
        font-family :"Segoe UI";
        font-size: x-large;
  }
</style>

  </body>


  <ul class="Lista">
  <?php
  $Numero = $_GET['Numero'];
  $Respuesta = 1 ;
  $num=0;
  $aux;

  echo "<p> La Sucesion Fibonacci es : </p>";
if ($Numero == null) {
  echo "<p> Digite un Numero .. </p>";
}else{
  echo "<li>". 0 . " , </li>";

    for($i=0;$i<$Numero-1;$i++){//0,1,1,2,3,5,8,13
      echo "<li>".$Respuesta. " , </li>";
  $aux =$Respuesta;
  $Respuesta +=$num;
  $num=$aux;
    }
}
   ?>
</ul>

</html>

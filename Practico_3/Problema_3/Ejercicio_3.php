
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="Estilos.css">
  </head>
  <body>
<form  action="Ejercicio_3.php" method="get" autocomplete="off">
  <p>Introduzca una Palabra que tenga una cantidad impar de Letras <b>ejemplo (SER --> 3 Letras)</b> : <br><br></p>
  <input type="text" name = "Palabra"/><br><br>
  <input type="submit" value="Presioname"/>
</form>
<style>
  ul.Lista li {
        display: inline;
        color:  #E8E8EC ;
        font-family :"Segoe UI";
        font-size:300%;
  }
</style>

  </body>

  <ul class="Lista" >

  <?php

    $Palabra = $_GET['Palabra'];
    $Iteracion = (strlen($Palabra)+1)/2;
    if (strlen($Palabra) % 2 == 0) {
      echo "<p><b>La palabra que introdujo tiene una cantidad de letras Par introduzca otro nombre . </b></p>";
    }else{
      echo "<p><b>La palabra que introdujo es : " . $Palabra . "</b></p>";
      $x=0;
      $y=1;
  for ($i=0; $i <$Iteracion; $i++) {
    for ($k=$Iteracion-$i; $k > 0; $k--) {
      echo "  &nbsp;&nbsp; ";
      echo "  &nbsp;&nbsp; ";
    }
      echo "<li><b>".substr($Palabra , ((strlen($Palabra)/2)+$x)  ,$y)."</b><br></li>\n";
      $y+=2;
      $x--;

      }

}

 ?>
 </ul>

</html>

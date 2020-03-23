
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <form action="TablaIntercalado.php" method="post" autocomplete="off">
      <h1>Digite una Cantidad de Columnas y Filas para mostrar la Bandera Boliviana Y Chuquisaqueña : </h1>
      <p>Digite el numero de Columnas</p>
      <input type="text" name="Columnas"><br>
      <p>Digite el numero de Filas</p>
      <input type="text" name="Filas"><br><br><br>
    <div >
      <input type="submit" value="Mostrar">
    </div>
    </form>
    <table align ="left">
    <?php

    $Columnas =$_POST['Columnas'];
    $Filas =$_POST['Filas'];
    $s=0;

for ($i=0; $i < $Columnas/2; $i++) {

  switch ($s) {
    case 0:
      for ($c=0; $c < $Filas; $c++) {
        if($c %3 == 0){
          echo "<tr bgcolor = #F90000 >";
        }else if($c%2==0 && $c != 4 || $c %5 ==0){
          echo "<tr bgcolor = #35A920>";
        }else{
          echo "<tr bgcolor = #F6FA0E>";
        }
          echo "<td><br></td>";
        echo "</tr>";
      }
    echo "</table>";
      $s++;

      case 1:
      echo "<table align ='right'>";
      for ($c=0; $c < $Filas; $c++) {
        if($c %2 == 0){
          echo "<tr bgcolor = #FFFFFF >";
        }else{
          echo "<tr bgcolor = #F90000>";
        }
          echo "<td><br></td>";
        echo "</tr>";
      }
    }
    $s--;
  }
     ?>
   </table>

  </body>
</html>

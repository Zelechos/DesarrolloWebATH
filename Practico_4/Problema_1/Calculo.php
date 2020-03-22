<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculo</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
<form action="Calculo.php" method="post" autocomplete="off">
  <h1>Especifique dos numeros para ver si son multiplos o no .</h1>
  <p>Digite el primer numero : </p>
  <input type="text" name="Numero_1"><br>
  <p>Digite el segundo numero : </p>
  <input type="text" name="Numero_2"><br><br><br>
  <input type="submit" value="Enviar">
</form>
<?php

$Numero_1 = $_POST['Numero_1'];
$Numero_2 = $_POST['Numero_2'];
$valor = "img/EsMultiplo.png";
$valor1 = "img/NoEsMultiplo.png";

if(($Numero_1 != 0) && ($Numero_2 != 0)){
if ($Numero_1%$Numero_2==0) {
  echo "<div align ='center'><img src='$valor.'/img/EsMultiplo.png'></div>";
}else{
  echo "<div align = 'center'><img src='$valor1.'/img/NoEsMultiplo.png' ></div>";
}
}else{
  echo "<p>NO ha introducido ningun numero aun</p>";
}

 ?>
  </body>
</html>

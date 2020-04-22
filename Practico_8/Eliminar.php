<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
    <title>Eitando...</title>
  </head>
  <body>

  </body>
</html>
<?php include("Conexion.php");
$id=$_GET['id'];
$sql = "DELETE from habitacion where id=$id";

$Resultado = $Conexion->query($sql);
if($Resultado)
    echo "<h1>Se Elimino la Habticion</h1>";
else
    echo "<h1>hubo error</h1>";
 ?>
 <meta http-equiv="refresh" content="3;URL=Habitaciones.php">

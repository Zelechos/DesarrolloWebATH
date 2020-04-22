<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
    <title>Insertando...</title>
  </head>
  <body>

  </body>
</html>
<?php
include("Conexion.php");
$Descripcion = $_POST['selDescripcion'];
$Numero = $_POST['txtNumero'];
$BañoPrivado = $_POST['txtBañoPrivado'];
$Espacio = $_POST['txtEspacio'];
$Precio = $_POST['txtPrecio'];
$sql = "insert into habitacion (IDTipoHabitacion,Numero, BañoPrivado , Espacio , Precio)
values('$Descripcion','$Numero' , '$BañoPrivado', '$Espacio' , '$Precio')";

$Resultado = $Conexion->query($sql);
if($Resultado)
    echo "<h1>La Habitacion fue Insertada</h1>";
else
    echo "<h1>hubo un error</h1>";
?>
<meta http-equiv="refresh" content="3;URL=Habitaciones.php">

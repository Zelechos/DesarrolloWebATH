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
<?php
include("Conexion.php");
$id = $_POST['id'];
$Descripcion = $_POST['selDescripcion'];
$Numero = $_POST['txtNumero'];
$BañoPrivado = $_POST['txtBañoPrivado'];
$Espacio = $_POST['txtEspacio'];
$Precio = $_POST['txtPrecio'];
$sql = "update habitacion set Numero ='$Numero' , BañoPrivado='$BañoPrivado' ,IDTipoHabitacion='$Descripcion', Espacio='$Espacio' , Precio='$Precio'
where id=".$id;

$Resultado = $Conexion->query($sql);
if($Resultado)
    echo "<h1>Se Edito con exito</h1>";
else
    echo "<h1>hubo un error<h1>";
?>
<meta http-equiv="refresh" content="3;URL=Habitaciones.php">

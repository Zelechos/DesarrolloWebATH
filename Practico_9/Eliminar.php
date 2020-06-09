<?php include("Conexion.php");
$id=$_GET['id'];
$Estado = 'E';

$SQL = "update usuarios set Estado = '$Estado' where id=".$id;

$Resultado = $Conexion->query($SQL);
if($Resultado)
    echo "<h1>Cuenta Eliminada</h1>";
else
    echo "<h1>hubo un error</h1>";

  ?>

<meta http-equiv="refresh" content="3;URL=Usuario.php">

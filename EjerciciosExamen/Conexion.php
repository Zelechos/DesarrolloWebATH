<?php
$Conexion = new mysqli("localhost","root","","bd_primerparcial");
if ($Conexion -> connect_error) {
  die("Conexion Fallida".$Conexion->connect_error);
}
?>

<?php
$Conexion = new mysqli("localhost","root","","bd_hotel");
if ($Conexion -> connect_error) {
  die("Conexion Fallida Mi Bro".$Conexion->connect_error);
}
?>

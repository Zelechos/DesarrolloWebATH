 <?php
$Conexion = new mysqli("localhost","root","","bd_practico7");
if ($Conexion -> connect_error) {
  die("Conexion Fallida".$Conexion->connect_error);
}
 ?>

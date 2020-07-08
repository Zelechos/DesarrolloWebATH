<?php 
include("Conexion.php");
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];

$SQL ="insert into persona (Nombre, Apellido) values('$Nombre', '$Apellido')";

$Respuesta =$Conexion->query($SQL);
if($Respuesta){
    echo "Se registro con exito";
}else{
    echo"Error";
}
?>



<?php session_start();
include('conexion.php');
$Correo = $_GET['Correo'];
$Password = sha1($_GET['Password']);


$sql="SELECT correo ,password FROM usuarios WHERE correo='$Correo' and password='$Password' ";

$resultado=$Conexion->query($sql);
if($fila=$resultado->fetch_assoc()){
	echo "Bienvenido a La Pagina de Usfx"

?>
	<meta http-equiv="refresh" content="1;URL=index.php">
<?php
	
}
else{
	echo "La Contraseña es Incorrecta ";
	
}

?>


<?php include("Conexion.php");
session_start();
if (isset($_SESSION['nombre'])) {
$ID = $_POST['ID'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$ID_Roles = $_POST['ID_Roles'];
$Estado = $_POST['Estado'];

$SQL = "insert into usuarios (ID,Correo,Password,Nombres,Apellidos,ID_Rol,Estado)
values ('$ID','$Correo',sha1('$Contraseña'),'$Nombre','$Apellido','$ID_Roles','$Estado')";

$Resultado = $Conexion->query($SQL);
if($Resultado)
    echo "<h1>Cuenta Creada</h1>";
else
    echo "<h1>hubo un error</h1>";
?>
<meta http-equiv="refresh" content="3;URL=Usuario.php">
<?php } else {
  ?>
  <div id="m">
     Usted no esta autorizado para ver esta pagina
  </div>
  <meta http-equiv="refresh" content="3;URL=Login.html">
<?php  } ?>

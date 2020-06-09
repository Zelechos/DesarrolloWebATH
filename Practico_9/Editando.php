<?php include("Conexion.php");
session_start();
if (isset($_SESSION['nombre'])) {
$id=$_POST['id'];
$ID = $_POST['ID'];
$Correo = $_POST['Correo'];
$Contraseña = sha1($_POST['Contraseña']);
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$ID_Roles = $_POST['ID_Roles'];
$Estado = $_POST['Estado'];

$SQL = "update usuarios set ID='$ID', Correo ='$Correo', Password ='$Contraseña', Nombres = '$Nombre', Apellidos ='$Apellido', ID_Rol = '$ID_Roles', Estado = '$Estado'
where id=".$id;

$Resultado = $Conexion->query($SQL);
if($Resultado)
    echo "<h1>Cuenta actualizada</h1>";
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

<?php include('Conexion.php');
session_start();
$Correo = $_POST['Correo'];
$Contraseña = sha1($_POST['Contraseña']);
                  //Correo
$SQL = "select Nombres,ID_Rol from usuarios where Correo ='$Correo' and Password = '$Contraseña'";
$Resultado = $Conexion->query($SQL);

  if ($Fila = $Resultado->fetch_assoc()){
    echo "Usuario correcto";
    $_SESSION['nombre'] = $Fila['Nombres'];
    $_SESSION['roles'] = $Fila['ID_Rol'];

    header("Location: Usuario.php");
  }else{
    echo "Corre o Contraseña Incorrectas";?>
  <meta http-equiv="refresh" content="3;URL=Login.html">
<?php } ?>

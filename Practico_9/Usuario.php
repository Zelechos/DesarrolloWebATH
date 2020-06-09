<?php session_start();
if (isset($_SESSION['nombre']) && isset($_SESSION['roles'])) { ?>

<?php include("Conexion.php");
$Sql = "select usuarios.ID,Correo,Password,Nombres,Apellidos,Descripción,Estado from usuarios
left join roles on usuarios.ID_Rol = roles.ID";
echo "Usted esta autenticado como ".$_SESSION['nombre']." Bienvenido. ";

$RespuestaServidor = $Conexion->query($Sql);
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
    <title>Usuarios</title>

  </head>
  <body>
    <a href="Cerrar.php" id="Cerrar">Cerrar Sesion</a>
    <table>
      <th>ID</th>
      <th>Correo</th>
      <th>Contraseña</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>ID_Rol</th>
      <th>Estado</th>
      <th>Acciones</th>
      <tr>
        <?php while($Fila = $RespuestaServidor->fetch_assoc()){?>
        <tr>
          <td><?php echo $Fila['ID'];?></td>
          <td><?php echo $Fila['Correo'];?></td>
          <td><?php echo $Fila['Password'];?></td>
          <td><?php echo $Fila['Nombres'];?></td>
          <td><?php echo $Fila['Apellidos'];?></td>
          <td><?php echo $Fila['Descripción'];?></td>
          <td><?php echo $Fila['Estado'];?></td>
          <td>
            <strong><a href="Editar.php?id=<?php echo $Fila['ID']?>"><img src="img/edit.png"  width="25px" height="25px" >Editar</a></strong>
            <strong><a href="Eliminar.php?id=<?php echo $Fila['ID']?>"><img src="img/delete.png"  width="25px" height="25px">Eliminar</a></strong>
          </td>
        </tr>
        <?php } ?>
      </tr>
    </table>
    <ul>
      <li><strong><a href="FormInsertar.html"><img src="img/insert.png"  width="25px" height="25px"/>Crear Cuenta</a></strong></li>
    </ul>
  </body>
</html>
<?php } else {
  ?>
  <div id="m">
     Usted no esta autorizado para ver esta pagina
  </div>
  <meta http-equiv="refresh" content="3;URL=Login.html">
<?php  } ?>

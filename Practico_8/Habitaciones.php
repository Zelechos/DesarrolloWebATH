<?php  include("Conexion.php");
$Sql = "select habitacion.ID,Numero,BañoPrivado,Descripcion,NumerodeCamas,Espacio,Precio from habitacion
left join tipohabitaciones on habitacion.IDTipoHabitacion = tipohabitaciones.ID";
$Respuesta = $Conexion->query($Sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
      <title>Habitaciones</title>
  </head>
  <body>
    <table>
      <th>ID</th>
      <th>Numero</th>
      <th>Numero de Camas</th>
      <th>Tipo Habitacion</th>
      <th>Baño Privado</th>
      <th>Espacio</th>
      <th>Precio</th>
      <th>Operaciones</th>
      <tr>
        <?php while($Fila = $Respuesta->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $Fila['ID']; ?></td>
          <td><?php echo $Fila['Numero']; ?></td>
          <td><?php echo $Fila['NumerodeCamas']; ?></td>
          <td><?php echo $Fila['Descripcion']?>  </td>
          <td><?php echo $Fila['BañoPrivado']; ?></td>
          <td><?php echo $Fila['Espacio']; ?></td>
          <td><?php echo $Fila['Precio']; ?></td>
          <td>
            <strong><a href="Editar.php?id=<?php echo $Fila['ID'];?>"><img src="iconos/edit.png" width="25px" height="25px">Editar</a></strong>
            <strong><a href="Eliminar.php?id=<?php echo $Fila['ID'];?>"><img src="iconos/delete.png" width="25px" height="25px">Eliminar</a></strong>
          </td>
        </tr>
        <?php } ?>
      </tr>
    </table>
<ul>
  <li><strong><a href="InsertarForm.html" id="estilo"><img src="iconos/insert.png" width="25px">Insertar Habitacion</a></strong></li>
</ul>

  </body>
</html>

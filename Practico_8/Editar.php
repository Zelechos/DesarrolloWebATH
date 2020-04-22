<?php  include("Conexion.php");
$id = $_GET['id'];
$Sql = "select ID,Numero,IDTipoHabitacion,BañoPrivado,Espacio,Precio from habitacion where id=".$id;
$Respuesta = $Conexion->query($Sql);
$Fila = $Respuesta->fetch_assoc();
//echo $id;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
    <title>Crear Habitacion</title>
  </head>
  <body>
    <h2>Editar Datos</h2>
    <form action="edit.php" method="POST">
  <div class="Insertar">
      <label for="selIDescripcion">Tipo Habitacion</label><br>
      <select name="selDescripcion">
        <option value="1"<?php if($Fila['IDTipoHabitacion']=='1') echo "selected";?>>Comun</option>
        <option value="2"<?php if($Fila['IDTipoHabitacion']=='2') echo "selected";?>>Double</option>
        <option value="3"<?php if($Fila['IDTipoHabitacion']=='3') echo "selected";?>>Triple</option>
        <option value="4"<?php if($Fila['IDTipoHabitacion']=='4') echo "selected";?>>Matrimonial</option>
        <option value="5"<?php if($Fila['IDTipoHabitacion']=='5') echo "selected";?>>Quad</option>
        <option value="6"<?php if($Fila['IDTipoHabitacion']=='6') echo "selected";?>>Suite</option>
      </select><br><br>
      <label for="txtNumero">Numero</label><br>
      <input type="number" name="txtNumero" value="<?php echo $Fila['Numero']; ?>"><br><br>
      <label for="txtBañoPrivado">Baño Privado</label><br>
      <input type="number" name="txtBañoPrivado" value="<?php echo $Fila['BañoPrivado']; ?>"><br><br>
      <label for="txtEspacio">Espacio</label><br>
      <input type="float" name="txtEspacio" value="<?php echo $Fila['Espacio']; ?>"><br><br>
      <label for="txtPrecio">Precio</label><br>
      <input type="float" name="txtPrecio" value="<?php echo $Fila['Precio']; ?>"><br><br>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" value="Registrar">
      </div>
    </form>

  </body>
</html>

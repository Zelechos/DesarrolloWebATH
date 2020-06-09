<?php  include("Conexion.php");
$id =$_GET['id'];
$SQL = "select ID,Correo,Password,Nombres,Apellidos,ID_Rol,Estado from usuarios where id=".$id;
$RespuestaServidor = $Conexion->query($SQL);
$Fila = $RespuestaServidor->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="Estilos.css">
     <style>
     @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
     </style>
     <title>Editar</title>
   </head>
   <body>
     <form action="Editando.php" method="post" class="Insertar">
       <label for="ID">ID</label><br>
       <input type="number" name="ID" value="<?php echo $Fila['ID']; ?>"/><br><br>
       <label for="Correo">Correo</label><br>
       <input type="text" name="Correo" value="<?php echo $Fila['Correo']; ?>"/><br><br>
       <label for="Contraseña">Contraseña</label><br>
       <input type="password" name="Contraseña" value="<?php echo $Fila['Password']; ?>"><br><br>
       <label for="Nombre">Nombre</label><br>
       <input type="text" name="Nombre" value="<?php echo $Fila['Nombres']; ?>"/><br><br>
       <label for="Apellido">Apellido</label><br>
       <input type="text" name="Apellido" value="<?php echo $Fila['Apellidos']; ?>"/><br><br>

       <label for="ID_Roles">Roles</label><br>
         <select name="ID_Roles">
           <option value="1"<?php if($Fila['ID_Rol']=='1') echo "selected";?>>Administrado</option>
           <option value="2"<?php if($Fila['ID_Rol']=='2') echo "selected";?>>Recepcionista</option>
         </select><br><br>

       <label for="Estado">Estado</label><br>
       <input type="text" name="Estado" value="<?php echo $Fila['Estado']; ?>"/><br><br>
       <input type="hidden" name="id" value="<?php echo $id; ?>">
       <input type="submit" name="Actualizar" value="Actualizar">
     </form>
   </body>
 </html>

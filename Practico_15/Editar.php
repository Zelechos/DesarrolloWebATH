<?php include("Conexion.php");
    $ID = $_POST['ID'];
    $SQL3 = "select ID , Nombre , Apellido from persona where id=".$ID;
    $Respuesta3 = $Conexion->query($SQL3);
    $Fila = $Respuesta3->fetch_assoc();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico _15</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
    <div id="Insertar">
    <form action = "Editando.php"method="POST">
        <input type="hidden" name="ID" value="<?php echo $Fila['ID']; ?>">
        <h2>Edita el Nombre y Apellido : </h2>
        <img src="img/usuario.png"  width="200px" height="200px"><br><br>
        <label for="Nombre">Nombre</label><br>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Fila['Nombre']; ?>"><br><br>
        <label for="Apellido">Apellido</label><br>
        <input type="text" name="Apellido" id="Apellido" value="<?php echo $Fila['Apellido']; ?>"><br><br>
        <input type="submit" value="Editar" ><br>
    </form>
        
    </div>

</body>
</html>
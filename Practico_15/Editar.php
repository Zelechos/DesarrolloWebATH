<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico _15</title>
    <link rel="stylesheet" text="text/css" href="style.css">
</head>
<body>
    <?php include("Conexion.php");
    $ID = $_POST['ID'];
    $SQL3 = "select ID,Nombre,Apellido from persona where id=".$ID;
    $Respuesta3 = $Conexion->query($SQL3);
    $Fila = $Respuesta3->fetch_assoc();
    ?>
    <div id="Insertar">
    <form action = "Editando.php"method="POST">
        <input type="hidden" name="ID" value="<?php echo $Fila['ID']; ?>">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Fila['Nombre']; ?>"><br>
        <label for="Apellido">Apellido</label>
        <input type="text" name="Apellido" id="Apellido" value="<?php echo $Fila['Apellido']; ?>"><br>
        
        <input type="submit" value="Registrar" ><br>
    </form>
    </div>

</body>
</html>
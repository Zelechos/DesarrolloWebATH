<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
</head>
<body>
    <?php include('Conexion.php');
    $SQL2 = "select ID , Nombre , Apellido from persona";
    $Respuesta2 = $Conexion->query($SQL2);
    ?>
    <table id="Tabla">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Operaciones</th>
        </tr>        
    <?php
    while($Fila=$Respuesta2->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $Fila['Nombre'];?></td>
        <td><?php echo $Fila['Apellido'];?></td>
        <td>
            <a id="Enlace" href="javascript:Editar(<?php echo $Fila ['ID']; ?>)">Editar <img src="img/editar.png"  width="20px" height="20px"></a>
            <a id="Enlace" href="javascript:Eliminar(<?php echo $Fila ['ID']; ?>)">Eliminar <img src="img/basura.png"  width="20px" height="20px"></a>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
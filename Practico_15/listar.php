<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('Conexion.php');
    $SQL2 = "select Nombre , Apellido from persona";
    $Respuesta2 = $Conexion->query($SQL2);
    ?>
    <table>
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
            <a href="Editar.php">Editar</a>
            <a href="Editar.php">Eliminar</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
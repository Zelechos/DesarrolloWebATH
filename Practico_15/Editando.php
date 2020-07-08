<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
</head>
<body>
    
</body>
</html>
<?php include("Conexion.php");
$ID = $_POST['ID'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];

$SQL4 = "update persona set Nombre='$Nombre ',Apellido='$Apellido' where ID=".$ID;
$Respuesta = $Conexion->query($SQL4);
?>
    <meta http-equiv="refresh"  content="0;URL=index.html">
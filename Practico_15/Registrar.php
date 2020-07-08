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
    
</body>
</html>
<?php 
include("Conexion.php");
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];

$SQL ="insert into persona (Nombre, Apellido) values('$Nombre', '$Apellido')";

$Respuesta =$Conexion->query($SQL);
if($Respuesta){
    echo "<h1>Se registro con exito</h1>";
}else{
    echo"Error";
}
?>
    <meta http-equiv="refresh"  content="1;URL=index.html" >



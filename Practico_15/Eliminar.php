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
$ID=$_POST['ID'];
$SQL4 = "DELETE from persona where ID=$ID";

$Resultado = $Conexion->query($SQL4);
if($Resultado)
    echo "<h1>Se Elimino al Usuario</h1>";
else
    echo "<h1>hubo error</h1>";
?>
<meta http-equiv="refresh" content="3;URL=index.html">

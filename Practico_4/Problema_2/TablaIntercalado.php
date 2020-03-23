<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
  <form action="TablaIntercalado.php" method="POST" autocomplete="off">
    <p>Digite el Numero de Filas : </p>
    <input type="number" name="Filas"><br>
    <p>Digite el Numero de Columnas : </p>
    <input type="number" name="Columnas"><br><br><br>
    <input type="submit" value="Enviar" >

  </form>

	<?php
     function Tablas($Filas,$Columnas){
     	echo "<table align = 'center'>" ;
     	for($k=1;$k<=$Filas;$k++){
           echo "<tr height='27'>";
     		for($j=1;$j<=$Columnas;$j++){

     			if($j%2==0){
     			switch($k%2)
			{
			case 0:echo "<td width='270' bgcolor='red'></td>";
			  break;
			case 1:echo "<td width='270' bgcolor='white'></td>";
			  break;
			  }
     			}
     			else{
     			switch($k%3)
			{
			case 0:echo "<td width='270' bgcolor='green'></td>";
			  break;
			case 1:echo "<td width='270' bgcolor='red'></td>";
			  break;
			case 2:echo "<td width='270' bgcolor='yellow'></td>";
			  break;
			  }
     			}
     		}
     	   echo"</tr>";
     	}
     }
     $Filas=$_POST['Filas'];
     $Columnas=$_POST['Columnas'];

     Tablas($Filas,$Columnas);

    ?>

</body>
</html>

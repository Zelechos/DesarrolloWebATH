



<!DOCTYPE html>
<html>
<head>
	<title>tabla intercalada</title>
</head>
<body>
	<?php
     function tabla($filas,$columnas){
     	echo "<table border='1 height='30'>" ;
     	for($i=1;$i<=$filas;$i++){
           echo "<tr height='30'>";
     		for($j=1;$j<=$columnas;$j++){

     			if($j%2==0){
     			switch($i%2)
			{
			case 0:echo "<td width='250' bgcolor='red'></td>";
			  break;
			case 1:echo "<td width='250' bgcolor='white'></td>";
			  break;

			  }

     			}
     			else{
     			switch($i%3)
			{
			case 0:echo "<td width='250' bgcolor='green'></td>";
			  break;
			case 1:echo "<td width='250' bgcolor='red'></td>";
			  break;
			case 2:echo "<td width='250' bgcolor='yellow'></td>";
			  break;
			  }

     			}



     		}
     	   echo"</tr>";
     	}
     }
     $filas=$_POST['filas'];
     $columnas=$_POST['columnas'];

     tabla($filas,$columnas);

    ?>

</body>
</html>

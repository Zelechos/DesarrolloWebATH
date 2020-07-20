<?php  session_start();

	$num=$_POST['numero'];

	$_SESSION["numero"]=$num;
?>
	<form action="insertar.php" method="POST">
		<span>nombres</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<span>apellidos</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<span>sexo</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<span>mesa</span><br>
<?php 

	for($i=1;$i<=$num;$i++){

?>

		<input type="text" name="nombre<?php echo $i; ?>">
		<input type="text" name="apellido<?php echo $i; ?>">
		masculino<input type="radio" name="sexo" value="M">
		femenino<input type="radio" name="sexo" value="F">
		<input type="text" name="mesa<?php echo $i; ?>"><br><br>
<?php 
	}

?>
		<input type="submit" value="Registrar">
	</form>
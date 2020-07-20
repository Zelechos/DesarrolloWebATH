<?php  include('conexion.php');

	$sql="SELECT * FROM pacientes";
	$resultado=$con->query($sql);

?>
	<table>
		<tr style="background: #ED7D31">
			<th>id</th>
			<th>nombres</th>
			<th>apellidos</th>
			<th>sexo</th>
			<th>mesa</th>
		</tr>
		<?php 
		$i=1;
		while($fila=$resultado->fetch_assoc()){
			if($i % 2 == 0){

		 ?>
		 <tr>
		 	<td><?php echo $fila['id'] ?></td>
		 	<td><?php echo $fila['nombres'] ?></td>
		 	<td><?php echo $fila['apellidos'] ?></td>
		 	<td><?php echo $fila['sexo'] ?></td>
		 	<td><?php echo $fila['mesa'] ?></td>

		 </tr>
		 <?php  
		 	}else{
		 ?>
		 	<tr style="background: #FBE4D5">
		 	<td><?php echo $fila['id'] ?></td>
		 	<td><?php echo $fila['nombres'] ?></td>
		 	<td><?php echo $fila['apellidos'] ?></td>
		 	<td><?php echo $fila['sexo'] ?></td>
		 	<td><?php echo $fila['mesa'] ?></td>

		 </tr>
		 <?php
		 	}
		 ?>

<?php  
		$i=$i+1;
		}
?>
	</table>
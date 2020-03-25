<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora.liv</title>
    <link rel="stylesheet" type= "text/css" href="Maquetado.css" autocomplete="off">
  </head>
  <body>
    <div id="Contenedor">
       <div id="Cabecera">
          <form autocomplete="off" action="llenar.php" method="POST">
            <h1> La cantidad de numeros que SUMARA y RESTARA.</h1>
            <input type="text" name="n"><br><br>
            <input type="submit" value="Introducir">
          </form>
       </div>
       <div id="SubMaqueta">
         <div id="Respuetas">
           <p>Los Resultados son : </p>
  <?php
  $n = $_POST['n'];
  $suma=0;
  for ($i=0; $i <$n ; $i++) {
   $suma =$suma+$_POST['x'.$i];
  }

  $nres = $_POST['n'];
  $resta=0;
  $nresta=0;
  $aux=0;
  for ($i=0; $i <$nres ; $i++) {
if ($resta == 0) {
  $resta=$_POST['y'.$i];
  $resta -=$aux;
}else{
  $nresta=$_POST['y'.$i];
  $resta-=$nresta;  
}
  }
  $resultado = $suma-$resta
  ?>
  <div style="text-align: center;">
    <table border="1" style="margin: 0 auto;" >
      <tr>
        <td><?php echo $suma; ?></td>
        <td><?php echo $resta; ?></td>
        <td><?php echo $resultado; ?></td>
      </tr>
    </table>
  </div>
         </div>
         <div id="SumarNum">
           <form action="Respuestas.php" method="POST">
             <p>Los Numeros a Sumar</p>
             <?php $cantidad = $_POST['n'];
             for ($i=0; $i < $cantidad ; $i++) {?>
             <input autocomplete="off" type="text" name="x<?php echo $i; ?>">
           <?php } ?>
            <input type="hidden" name="n" value="<?php echo $cantidad ?>"><br><br>

            <p>Los Numeros a Restar</p>
             <?php $cantidad1= $_POST['n'];
             for ($i=0; $i < $cantidad1 ; $i++) {?>
             <input autocomplete="off" type="text" name="y<?php echo $i; ?>">
           <?php } ?>
            <input type="hidden" name="n" value="<?php echo $cantidad1 ?>"><br><br>
             <input type="submit" value="Calcular">
           </form>
         </div>
       </div>
       <div id="PieDePagina" align="center">
         <p>Calculadora con Cokies</p>

       </div>
    </div>

  </body>
</html>

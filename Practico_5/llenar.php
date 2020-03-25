<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora.liv</title>
    <link rel="stylesheet" type= "text/css" href="Maquetado.css">
  </head>
  <body>
    <div id="Contenedor">
       <div id="Cabecera">
          <form action="llenar.php" method="POST" autocomplete="off">
            <h1> la cantidad de numeros que SUMARA y RESTARA.</h1>
            <input type="text" name="n"><br><br>
            <input type="submit" value="Introducir">
          </form>
       </div>
       <div id="SubMaqueta">
         <div id="Respuetas">
           <p>Los Resultados apareceran aqui.</p>

          <?php
           $n = $_POST['n'];
           $suma=0;
           for ($i=0; $i <$n ; $i++) {
            $suma =$suma+$_POST['x'.$i];
           }
           ?>
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
       <div id="PieDePagina" align ="center">
         <p>Calculadora con Cokies</p>
       </div>
    </div>

  </body>
</html>

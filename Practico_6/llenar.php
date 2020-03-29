<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width =device-width">
    <meta name="description" content="Pratica 6 de SIS 256">
    <meta name="keywords" content="diseño web,desarrollo web,seo,posicionamiento web">
    <meta name="author" content="Tumiri Huanca Alex">
    <title>Practica 6</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <header>
      <div class="Contenedor">
        <div id="Marca">
          <h1><span class="Resaltar">Practico</span> 6</h1>
        </div>
        <nav>
          <ul>
            <li><a href="Tarea6.html">Inicio</a></li>
            <li class="Actual"><a href="llenar.php">Sumar y Restar (Sesiones)</a></li>
            <li><a href="llenarCook.php">Sumar y Restar (Cookies)</a></li>
            <li><a href="restas.php">Sesiones</a></li>
            <li><a href="restascok.php">Cookies</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="Cabecera">
      <div class="Contenedor">
          <h1>Practico 6 de la Materia SIS 256</h1>
          <p>Crear la página tarea6.html que utilizando formularios solicite un número llame por POST a la página llenar.php que permite generar n cuadros del sumando y n cuadros retando y muestra el texto para introducir valores, además dispone el botón calcular que llama a la página restas.php que calcula la resta del sumando y el restando.
            <br>Para realizar se debe hacer
            <br>a) Utilizando Cookies
            <br>b) Utilizando Sessiones
          </p>
      </div>
    </section>

    <section id="Boletin">
      <div class="Contenedor">
        <h1>Digite la cantidad de Numeros que Sumara y Restara</h1>
        <form action="llenar.php" method="POST">
          <input autocomplete="off" type="text" name="Cantidad" placeholder="Ingrese la cantidad de numeros">
          <button type="submit" class="boton1">Ingresar</button>
        </form>
      </div>
    </section>

    <section id="Cajas">
      <div class="Contenedor">
      <div class="caja">
          <img src="img/i1.png">
          <h3>HTML5</h3>
          <p>Esta pagina fue creada en parte en HTML5</p>
        </div>
        <div class="caja">
          <img src="img/i2.jpg">
          <h3>CSS</h3>
          <p>Esta pagina fue creada en parte con CSS</p>
        </div>
        <div class="caja">
          <img src="img/i3.jpg">
          <h3>RESPONSIVE DESIGN</h3>
          <p>Esta pagina fue creada Aplicando el Responsive Design</p>
        </div>
        <div class="caja">
          <img src="img/i4.png">
          <h3>PHP</h3>
          <p>Esta pagina fue creada en parte con PHP</p>
        </div>
        </div>

        <div class="llenar">
        <br>
      <form action="restas.php" method="POST">
        <h2><p>Los Numeros a Sumar :</p></h2><br><br>
        <?php
        $cantidad = $_POST['Cantidad'];
        $_SESSION['S'] = $cantidad;

        for ($i=0; $i < $cantidad ; $i++) {?>
        <input placeholder="Inserte Numero" autocomplete="off" type="text" name="x<?php echo $i; ?>">
      <?php } ?>
        <br><br>
       <h2><p>Los Numeros a Restar: </p></h2><br><br>
        <?php for ($i=0; $i < $cantidad ; $i++) {?>
        <input placeholder="Inserte Numero" autocomplete="off" type="text" name="y<?php echo $i; ?>">
      <?php } ?>
        <br>
        <input type="submit" value="Calcular">
      </form>
    </div>
    </section>

    <footer>
      <p>Practico 6 SIS 256 , Copyrigth &copy; 2020</p>
    </footer>
  </body>
</html>

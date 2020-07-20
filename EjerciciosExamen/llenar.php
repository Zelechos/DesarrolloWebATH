<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Parcial</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
</head>
<body>
    <div id="Contenedor">
        <div id="Cabezera">
            <h1>Universidad de San Francisco Xavier</h1>
            <img src="img/madres.png" width="100px" height="120px">
            <p>
                <strong id="subtitle">Falcultad de Tecnologia</strong>  
                <strong id="red">Sucr</strong><strong id="yellow">e-Bol</strong><strong id="green">ivia</strong>
            </p>
            <p id="carrera">
                Carrera de Ing en Ciencias de la Computacion <br>
                Semestre 1-2020
            </p>
    
        </div>
        <div id="Menu">
            <ul>
                <li><a href="index.html">Ejercicio 1</a></li>
                <li><a href="formEj2.html">Ejercicio 2</a> </li>
                <li><a href="formEj3.html">Ejercicio 3</a> </li>
                <li><a href="formEj4.html">Ejercicio 4</a> </li>
                <li><a href="formEj5.html">Ejercicio 5</a> </li>
            </ul>
            
        </div>
        <div id="Contenido">
            <blockquote>
                <h3>Digite la Cantidad de Numeros Multiplicar</h3>
                <form autocomplete="off" action="llenar.php" method="POST">
                    <label for="CantidadNumeros">Cantida de Numeros : </label>
                    <input type="number" name="CantidadNumeros">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Introducir">
                </form>
            </blockquote>

            <form action="multiplicacion.php" method = "POST">
            <?php
            $Cantidad = $_POST['CantidadNumeros'];
            
            for ($i=0; $i < $Cantidad ; $i++) {?>
            <input autocomplete="off" type="number" name="x<?php echo $i; ?>">
            <?php } ?>
            <input type="hidden" name="numeros" value="<?php echo $Cantidad ?>"><br><br>
            <input type="submit" value="Calcular">
            </form>

        </div>
    </div>
</body>
</html>
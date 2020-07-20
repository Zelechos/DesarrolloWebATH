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
                <h3>Introduzca dos Numeros:</h3>
                <form action="Sumar.php" method="GET">
                    <label for="Numero1">Numero1</label><br>
                    <input type="number" name="Numero1"/><br>
                    <label for="Numero2">Numero2</label><br>
                    <input type="number" name="Numero2"/><br><br>
                    <input type="submit" name="Sumar">
                </form>
            </blockquote>
            <?php
                $Numero1 = $_GET['Numero1'];
                $Numero2 = $_GET['Numero2'];
                $Respuesta = $Numero1+$Numero2;
            ?>
            <table id="Ej2">
                <tr> 
                    <td><?php echo $Numero1 ; ?></td>
                    <td><?php echo " + " ; ?></td>
                    <td><?php echo $Numero2 ; ?></td>
                    <td><?php echo " = " ; ?></td>
                    <td><?php echo $Respuesta ; ?></td>
                </tr>
            </table>
            

        </div>
    </div>
</body>
</html>

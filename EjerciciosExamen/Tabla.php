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
                <form action="Tabla.php" method="GET">
                    <label for="Filas">Filas</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="Filas"/><br>
                    <label for="Columnas">Columnas</label>
                    <input type="text" name="Columnas"/>
                    <input type="submit" name="Enviar">
                </form>
            </blockquote>
            <?php
            $filas = $_GET['Filas'];
            $columnas = $_GET['Columnas'];

            $Filas = $filas+1;
            $Columnas = $columnas+1;
            
            function Tabla($Filas , $Columnas){

                $NumeroFilas = 1;
                $NumeroColumnas = 1;
                
                //Creamos el $Array vacio 
                $Array = array();

                echo "<table style=' border-color: #222020; border-collapse: collapse; margin-right:auto; margin-left:auto;'>";
                for($i=0 ; $i < $Columnas ; $i++){
                    
                    echo "<tr>";

                    if($i==0){

                        for($j=0 ; $j < $Filas ; $j++){
                            
                            if($j==0){
                                echo "<td style = 'width: 50px;background: #807979; border: solid;'>  </td>";
                            }else{
                                array_push($Array , $NumeroFilas);
                                echo "<td style = 'width: 50px;background: #807979;border: solid;'>",$NumeroFilas++,"</td>";
                            }

                        }

                    }else{

                        for($h=0 ;$h < $Filas ; $h++){

                            if($h==0){
                                $x = $NumeroColumnas;
                                echo "<td style = 'width: 50px;background: #807979;border: solid;'>",$NumeroColumnas++,"</td>";
                            }else{
                                $resp = $x*$Array[$h-1];
                                echo "<td style= 'width :50px;border: solid;'>",$resp,"</td>";
                            }
                        }   
                    }
                    echo "</tr>";

                }
                echo "</table>";
            }
            
            Tabla($Filas,$Columnas);
            
            ?>

        </div>
    </div>
</body>
</html>
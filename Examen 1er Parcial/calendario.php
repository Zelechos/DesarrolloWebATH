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
            <img src="img/usfx.png" width="100px" height="120px">
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
                <li><a href="index.html">1.Indice</a></li>
                <li><a href="formcalendario.html">2.Calendario</a> </li>
                <li><a href="formEj3.html">Ejercicio 3</a> </li>
                <li><a href="fitroduccion.html">4.Jurados</a> </li>
            </ul>
            
        </div>
        <div id="Contenido">
            <div id="formcalendario">
                    <table>
                    <tr>
                        <th>Lunes</th>   
                        <th>Martes</th>   
                        <th>Miercoles</th>   
                        <th>Jueves</th>   
                        <th>Viernes</th>   
                        <th>Sabado</th>   
                        <th>Domingo</th>   
                    </tr>

                    <?php 
                    $mes=$_GET['Meses'];
                    $año=$_GET['Año'];

                    echo "<br><h3>Año ",$año,"</h3>";
                    $Controlador=0;
                    $CantidadDeDias=0;
                    switch ($mes){
                        case 1:
                            echo "<h3>Mes : Enero</h3>";
                            $Controlador = 2;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 1, $año);

                        break;
                        case 2:
                            echo "<h3>Mes : Febrero</h3>";
                            $Controlador =5;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 2, $año);
                        break;
                        case 3:
                            echo "<h3>Mes : Marzo</h3>";
                            $Controlador =6;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 3, $año);
                        break;
                        case 4:
                            echo "<h3>Mes : Abril</h3>";
                            $Controlador =2;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 4, $año);

                        break;
                        case 5:
                            echo "<h3>Mes : Mayo</h3>";
                            $Controlador =4;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 5, $año);
                        break;
                        case 6:
                            echo "<h3>Mes : Junio</h3>";
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 6, $año);
                            $Controlador =0;
                        break;
                        case 7:
                            echo "<h3>Mes : Julio</h3>";
                            $Controlador =2;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 7, $año);
                        break;
                        case 8:
                            echo "<h3>Mes : Agosto</h3>";
                            $Controlador =5;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 8, $año);
                        break;
                        case 9:
                            echo "<h3>Mes : Septiembre</h3>";
                            $Controlador =1;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 9, $año);
                        break;
                        case 10:
                            echo "<h3>Mes : Octubre</h3>";
                            $Controlador =3;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 10, $año);
                        break;
                        case 11:
                            echo "<h3>Mes : Noviembre</h3>";
                            $Controlador =6;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 11, $año);
                        break;
                        case 12:
                            echo "<h3>Mes : Diciembre</h3>";
                            $Controlador =1;
                            $CantidadDeDias = cal_days_in_month(CAL_GREGORIAN, 12, $año);
                        break;
                    }

                 
                    $nume = 1;
                    $cont=0;
                    for ($i = 0; $i < 6 ;$i++ ){
                        if($i % 2==0){
                            echo "<tr style='background-color: #FFFFF ; '>";
                        }else{
                            echo "<tr style='background-color: #E2EFD9  ; '>";
                        }
                            for($j = 0; $j < 7 ;$j++ ){
                                if ($j == $Controlador ){
                                    if($nume > $CantidadDeDias){
                                        echo "<td></td>";
                                    }else{
                                    echo "<td>",$nume++,"</td>";
                                    }
                                   // echo jddayofweek (v cal_to_jd(CAL_GREGORIAN, 20,7, 2020) ,1 );
                                    $cont++;
                                }else if($cont == 1){
                                    if($nume > $CantidadDeDias){
                                        echo "<td></td>";
                                    }else{
                                        echo "<td>",$nume++,"</td>";
                                    }
                                }else if($cont==0){
                                    echo "<td></td>";
                                }else{
                                    if($nume > $CantidadDeDias){
                                        echo "<td></td>";
                                    }else{
                                        echo "<td>",$nume++,"</td>";
                                    } 
                                }
                            }
                           echo "</tr>";
                    }
                    ?>
                    </table>

            </div>

        </div>
    </div>
</body>
</html>
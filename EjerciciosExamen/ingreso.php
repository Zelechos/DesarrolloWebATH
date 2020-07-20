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
                <h3>Introduzca su Cuenta:</h3>
                <form action="ingreso.php" method="POST">
                    <label for="Usuario">Usuario</label><br>
                    <input type="text" name="Usuario"/><br>
                    <label for="Contraseña">Contraseña</label><br>
                    <input type="text" name="Contraseña"/><br><br>
                    <input type="submit" name="Ingresar">
                </form>
            </blockquote>
            <?php
                include('Conexion.php');
                $Usuario = $_POST['Usuario'];
                $Contraseña = $_POST['Contraseña'];

                setcookie('usuario',$Usuario,time() + 460);
                setcookie('contraseña',$Contraseña,time() + 460);

                if($_COOKIE['usuario'] == $_POST['Usuario'] && $_COOKIE['contraseña'] == $_POST['Contraseña']){
                    
                    if(isset($_COOKIE['Contador'])){

                        if( $_COOKIE['Contador']== 0){

                        setcookie('Contador',1,time()+84600);
                        echo "Bienvenido por Primera vez a nuestra pagina";

                        }else if($_COOKIE['Contador'] > 5){

                            echo "Indique que le gusta el sitio <br>";
                            echo "a) Buena Presentacion";
                        }else{
                            setcookie('Contador',$_COOKIE['Contador']+1,time()+84600);
                            echo "Gracias por ya ser un Visitante Frecuente usted visito este sitio : ",$_COOKIE['Contador'];
                        }
                    }

                }else{
                    setcookie('Contador',1,time()+460);
                    echo "Bienvenido por Primera vez a nuestra pagina"; 
                }
            ?>
            <meta http-equiv="refresh" content="3;URL=formEj5.html">
                
        </div>
    </div>
</body>
</html>
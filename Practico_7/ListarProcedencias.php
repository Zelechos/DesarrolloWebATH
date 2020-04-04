<?php  include("Conexion.php");
$Sql = "select ID,Procedencia,CodigoPais,Nombre,Apellido,Edad,Fecha from procedencias";
$Respuesta = $Conexion->query($Sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listar Proecedencias</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>
  </head>
  <body>
    <div id="Izquierda">
      <blockquote>
        <br><h1><b>Tabla Procedencias</b></h1>
      </blockquote>
      <table>
        <th>ID</th>
        <th>Procedencia</th>
        <th>Codigo Pais</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Fecha</th>
        <tr>
          <?php while ($Fila = $Respuesta->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $Fila['ID'] ?></td>
            <td><?php echo $Fila['Procedencia'] ?></td>
            <td><?php echo $Fila['CodigoPais'] ?></td>
            <td><?php echo $Fila['Nombre'] ?></td>
            <td><?php echo $Fila['Apellido'] ?></td>
            <td><?php echo $Fila['Edad'] ?></td>
            <td><?php echo $Fila['Fecha'] ?></td>
          </tr>
          <?php } ?>
        </tr>
      </table>
    </div>
    <div id="Derecha">
      <blockquote>
        <br><h1><b>Codigo</b></h1>
        <blockquote>
          <h2><b>PHP</b></h2>
          <hr>
          <br><h3><b>Conexion.php</b></h3>
      <div id="code1">
  <h3><br>&nbsp;< ?php <br>
  &nbsp;&nbsp;$Conexion = new mysqli("localhost","root","","bd_practico7"); <br>
   &nbsp;&nbsp;&nbsp;   if ($Conexion -> connect_error) { <br>
  &nbsp;&nbsp;&nbsp;    die("Conexion Fallida".$Conexion->connect_error); <br>
  &nbsp;&nbsp;  } <br>
  &nbsp;? >
</h3>
      </div>
      <br>
      <hr>
      <br><h3><b>ListarProcedencias.php</b></h3>
      <div id="code2">
    <h3>  &nbsp;  < ?php <br>
      &nbsp;&nbsp;include("Conexion.php"); <br>
      &nbsp;  $Sql = "select ID,Procedencia,CodigoPais,Nombre,Apellido,Edad,Fecha &nbsp;&nbsp;from procedencias";<br>
      &nbsp;  $Respuesta = $Conexion->query($Sql);<br>
      &nbsp;  ? >
        <pre>
          <code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en" dir="ltr"&gt;
   &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Listar Proecedencias&lt;/title&gt;
      &lt;link rel="stylesheet" type="text/css" href="estilos.css"&gt;
  &lt;style&gt;
    @import url('https://fonts.googleapis.com/css?family= <br>    Montserrat&display=swap');
  &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id="Izquierda"&gt;
            &lt;blockquote&gt;
                &lt;br&gt;&lt;h1&gt;&lt;b&gt;Tabla Procedencias&lt;/b&gt;&lt;/h1&gt;
            &lt;/blockquote&gt;
            &lt;table&gt;
              &lt;th&gt;ID&lt;/th&gt;
              &lt;th&gt;Procedencia&lt;/th&gt;
              &lt;th&gt;Codigo Pais&lt;/th&gt;
              &lt;th&gt;Nombre&lt;/th&gt;
              &lt;th&gt;Apellido&lt;/th&gt;
              &lt;th&gt;Edad&lt;/th&gt;
              &lt;th&gt;Fecha&lt;/th&gt;
              &lt;tr&gt;
                < ?php while ($Fila = $Respuesta->fetch_assoc()) { ?>
              &lt;tr&gt;
                  &lt;td&gt;< ?php echo $Fila['ID'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['Procedencia'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['CodigoPais'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['Nombre'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['Apellido'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['Edad'] ?>&lt;/td&gt;
                  &lt;td&gt;< ?php echo $Fila['Fecha'] ?>&lt;/td&gt;
              &lt;/tr&gt;
                < ?php } ?>
              &lt;/tr&gt;
            &lt;/table&gt;
            &lt;/div&gt;
        &lt;/body&gt;
    &lt;/html&gt;
          </code>
        </pre>
        </h3>
      </div>
      <br>
      <hr>
      <br><h3><b>Estilos.css</b></h3>
      <div id="code4">
        <h3><p>#Izquierda{ <br>
          width: 50.6%;<br>
          height:750px;<br>
          background-color:#ffffff;<br>
          float: left;<br>
          margin-left: -10px;<br>
          margin-top: -10px;<br>
          position: fixed;<br>
          color: #3927cc;<br>
          font-family: 'Montserrat', sans-serif;<br>
        }<br>
<br>
        #Derecha{<br>
          width: 50.6%;<br>
          height: 4500px;<br>
          background-color: #5f41f4;<br>
          float: right;<br>
          margin-right: -10px;<br>
          margin-top: -10px;<br>
          font-family: 'Montserrat', sans-serif;<br>
          color: #ffffff;<br>
        }<br>
        <br>
        h1{<br>
          font-size: 60px;<br>
        }<br>
<br>
        table {<br>
          border-collapse: collapse;<br>
          border: #3927cc 3px solid;<br>
          margin: auto;<br>
          margin-top: 100px;<br>
          font-family: 'Montserrat', sans-serif;<br>
          width: 70% auto;<br>
          height: 250px;<br>
          font-size: 15px;<br>
        }<br>
<br>
        th{<br>
          background-color: #3927cc;<br>
          color: #fff;<br>
          width: 90px;<br>
          height: 40px;<br>
        }<br>
<br>
        td{<br>
          background-color: #fbfbfb;<br>
          color: #3927cc;<br>
          width: 100px;<br>
          height: 40px;<br>
          text-align: center;<br>
          margin: auto;<br>
          border: #3927cc 1px solid;<br>
        }<br>
<br>
        div #code1{<br>
          width: 700px;<br>
          height: 160px;<br>
          background-color: #ffffff;<br>
          margin: auto;<br>
          margin-left: -30px;<br>
          color: black;<br>
          font-family: monospace;<br>
        }<br>
<br>
        div #code2{<br>
          width: 700px;<br>
          height: 1000px;<br>
          background-color: #ffffff;<br>
          margin: auto;<br>
          margin-left: -30px;<br>
          color: black;<br>
          font-family: monospace;<br>
        }<br>
<br>
        div #code3{<br>
          width: 700px;<br>
          height: 80px;<br>
          background-color: #ffffff;<br>
          margin: auto;<br>
          margin-left: -30px;<br>
          color: black;<br>
          font-family: monospace;<br>
        }<br>
<br>
div #code4{<br>
  width: 700px;<br>
  height: 2100px;<br>
  background-color: #ffffff;<br>
  margin: auto;<br>
  margin-left: -30px;<br>
  color: black;<br>
  font-family: monospace;<br>
}<br>
<br>
        a{<br>
          margin-left: 300px;<br>
        }<br>
</p>
</h3>
      </div>
      <br>
      <hr>
      <br><h3><b>PHPmyAdmin</b></h3>
      <div id="code3">
        <h3><p>Link para Ingresar e Eliminar Datos Desde el PHPmyAdmin : </p></h3>
        <h3><a href="http://localhost:8080/phpmyadmin/sql.php?server=1&db=bd_practico7&table=procedencias&pos=0">PHPmyAdmin</a></h3>
      </div>
<br>
<hr>
    </div>

  </body>
</html>

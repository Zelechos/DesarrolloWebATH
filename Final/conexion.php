<?php
    $Conexion = new mysqli('localhost','root','','bd_noticias');
    if($Conexion -> connect_error)
        die("Conexion Fallida Algo Anda mal".$Conexion->connect_error);
?>
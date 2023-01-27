<?php
$servidor = "sdb-v.hosting.stackcp.net";
$bd = "Proyecto-32313230d3";
$usuario = "pablopozo03";
$password = "usuario123";   

$conn = mysqli_connect($servidor, $usuario, $password, $bd);   

if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>
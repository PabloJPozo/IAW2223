<?php

//Aquí va la conexión con MySQL

$conn = mysqli_connect($servidor, $usuario, $password, $bd);   

if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>

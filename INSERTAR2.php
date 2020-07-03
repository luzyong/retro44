<?php
include("conexion.php");
$con=conectar();
$nombre=$_GET["username"];
$correo=$_GET["correo"];
$contra=$_GET["password"];
$insert="INSERT INTO registro (Correo,Contraseña,Nombre) VALUES ('$correo','$contra','$nombre')";
mysqli_query($con,$insert) or die ("Error de conexion". mysqli_error($con));
header("location:index.php");

?>
  
  
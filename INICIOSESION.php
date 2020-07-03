<?php
include("conexion.php");
session_start();
$con=conectar();
$nombre=$_GET["username"];
$correo=$_GET["email"];
$contra=$_GET["password"];
$error="Usuario Y/O contraseña inválido. Intente nuevamente";
$tabla="SELECT * FROM registro WHERE Correo='$correo' AND Contraseña='$contra' AND Nombre='$nombre'";
$select=mysqli_query($con,$tabla);
$contador=mysqli_num_rows($select);
if($contador==1){
	
	$_SESSION['nombre']=$nombre;
	header("location:indexuser.php");
}
else{
	$_SESSION['error']=$error;
	header("location:acceder.php");
}
?>
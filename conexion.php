<?php
function conectar(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="alumnos";
	$con= mysqli_connect($server,$user,$pass,$db) or die ("Error en la conexión");
	return $con;
}

?>

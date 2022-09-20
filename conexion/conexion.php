<?php
	//conexión con la base de datos
	$conexion = mysqli_connect

	("localhost",
	"root",
	"",
	"ventavehiculos");

	if($conexion->connect_errno){
		echo "Error de conexion";
	}else{
		//Linea para verificar si la base de datos se conecto correctamente
		//echo "Conexion correcta";
	}
?>
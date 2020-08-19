<?php
 	function conexion(){
 		date_default_timezone_set("America/Mexico_City");
		$servidor ="localhost";
		$usuario = "root";
		$password ="";
		$bd = "animatoys";
		@$conexion =mysqli_connect($servidor, $usuario ,$password, $bd);
		$conexion -> query("SET NAMES 'utf8'");
		return $conexion;
	}
	if (conexion()){
		//echo "conectado";
	} else{
		echo "no conectado";
	}
?>
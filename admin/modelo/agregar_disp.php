<?php
	require_once "conexion.php";
	$conexion=conexion();

	$sku=mysqli_real_escape_string($conexion, $_POST['sku']);
	$disponibilidad=mysqli_real_escape_string($conexion, $_POST['cantidad']);

	$sql="UPDATE producto set disponibilidad= disponibilidad + '$disponibilidad' WHERE sku='$sku'";
	$result=mysqli_query($conexion,$sql);

?>
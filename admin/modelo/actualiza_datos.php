<?php
	require_once "conexion.php";
	$conexion=conexion();

	$sku=mysqli_real_escape_string($conexion, $_POST['sku']);
	$nombre=mysqli_real_escape_string($conexion, $_POST['nombre']);
	$descripcion=mysqli_real_escape_string($conexion, $_POST['desc']);
	$precio=mysqli_real_escape_string($conexion, $_POST['precio']);
	$categoria=mysqli_real_escape_string($conexion, $_POST['categoria']);
	$mascota=mysqli_real_escape_string($conexion, $_POST['mascota']);

	$sql="UPDATE producto set nombre_producto= '$nombre', descripcion= '$descripcion', precio_unitario='$precio', categoria='$categoria', mascota='$mascota' where sku='$sku'";
	$result=mysqli_query($conexion,$sql);

?>
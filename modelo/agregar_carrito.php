<?php
	require_once "conexion.php";
	require_once "../controlador/genera_ticket.php";
	$conexion = conexion();
	session_start();
	//Se va a buscar si el cliente tiene un ticket pendiente
	//si tiene un ticket pendiente, el id del ticket se define como una variable sesion, si no se creará uno y se le asignara a la variable sesion
	if (!isset($_SESSION['ticket'])) {
		$_SESSION['ticket'] = codigo(6);
		$tiquet = $_SESSION['ticket'];
		$user = $_SESSION['id_usuario'];
		$status="en espera";
		$sql1= "INSERT INTO compra (no_ticket, status, id_cliente) VALUES ('$tiquet', '$status', '$user')";
		$result = mysqli_query($conexion, $sql1);
	}
	else{
		$tiquet = $_SESSION['ticket'];
	}

	$sku = $_POST['producto'];
	$cantidad = $_POST['cantidad'];

	$precio = "SELECT precio_unitario FROM producto WHERE sku='$sku'";
	$result1 = mysqli_query($conexion, $precio);
	$ver= mysqli_fetch_row($result1);
	$precio_unitario = $ver[0];

	$total = number_format($precio_unitario * $cantidad, 2, '.','');

	$sql = "INSERT INTO asocia VALUES ('$tiquet', '$sku', '$cantidad', '$total')";
	$result= mysqli_query($conexion, $sql);
	if (!$result) {
		return 0;
	}
?>
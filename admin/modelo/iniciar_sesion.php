<?php
	require_once 'conexion.php';
	$conexion = conexion();

	$correo = mysqli_real_escape_string($conexion, $_POST['usuario']);
	$contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);

	$sql= "SELECT * FROM administrador WHERE nombre_usuario = '$correo' AND contrasenia = '$contraseña'";
	$consulta= mysqli_query($conexion, $sql);
	$contar= mysqli_num_rows($consulta);


	if ($correo == '' || $contraseña == '' || $contar == 0) {
		echo json_encode('error');
	}
	
	else{
		foreach ($consulta as $key) {
			session_start();
			$_SESSION['id_admin'] = $key['nombre_usuario'];	
		}
		echo json_encode('Correcto');
	}
?>
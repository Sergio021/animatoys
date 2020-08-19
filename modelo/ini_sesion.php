<?php
	require_once 'conexion.php';
	require_once "../controlador/genera_ticket.php";
	$conexion = conexion();

	$correo = mysqli_real_escape_string($conexion, $_POST['email']);
	$contrasenia = mysqli_real_escape_string($conexion, $_POST['password']);

	$sql= "SELECT id_cliente, nombre_cliente FROM cliente WHERE email = '$correo' AND contrasenia = '$contrasenia'";
	$consulta= mysqli_query($conexion, $sql);
	$contar= mysqli_num_rows($consulta);


	if ($contar == 0) {
		echo json_encode('Error');
	}
	else{
		foreach ($consulta as $key) {
			session_start();
			$_SESSION['id_usuario'] = $key['id_cliente'];	
			$_SESSION['nombre_cliente'] = $key['nombre_cliente'];

			//se busca el ticket, si no se crea
			$busca_ticket= "SELECT no_ticket from compra WHERE status='en espera' AND id_cliente=".$key['id_cliente'];
			$c_ticket = mysqli_query($conexion, $busca_ticket);
			$ticket= mysqli_num_rows($c_ticket);

			if ($ticket == 0) {
				$_SESSION['ticket'] = codigo(6);
				$num_ticket = $_SESSION['ticket'];
				$user = $_SESSION['id_usuario'];
				$status="en espera";
				$sql1= "INSERT INTO compra (no_ticket, status, id_cliente) VALUES ('$num_ticket', '$status', '$user')";
				$consulta1 = mysqli_query($conexion, $sql1);
			}
			else{
				$ticket= mysqli_fetch_row($c_ticket);
				$_SESSION['ticket'] = $ticket[0];
			}	
		}
		echo json_encode('Correcto');
	}
?>
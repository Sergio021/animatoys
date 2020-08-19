<?php
require_once 'conexion.php';
$conexion =conexion();

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$fec_nac = $_POST['nacimiento'];
$email = $_POST['correo'];
$contraseña = $_POST['pass'];

if ($nombre == '' || $apellidos == '' || $fec_nac =='' || $email =='' || $contraseña == '') {
	echo json_encode("error");
}
else{

	$sql= "INSERT INTO cliente(nombre_cliente, apellidos, fec_nacimiento, email, contrasenia) VALUES ('$nombre','$apellidos','$fec_nac','$email','$contraseña')";
	$resultado = mysqli_query($conexion, $sql);

	if (!$resultado) {
		echo json_encode("error");
	}
	else{
		echo json_encode("correcto");
	}
}



?>
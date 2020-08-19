<?php
require_once 'conexion.php';
$conexion =conexion();

$ticket = $_POST['ticket'];
$total = $_POST['total'];
$tarjeta = $_POST['tarjeta'];

$status = "Pagado";
$hoy = date("YmdGis");

$sql = "UPDATE compra set total_venta='$total', num_tarjeta='$tarjeta', status ='$status', fecha_hora='$hoy' WHERE no_ticket='$ticket'";
$result = mysqli_query($conexion, $sql);

session_start();
unset($_SESSION['ticket']);
?>
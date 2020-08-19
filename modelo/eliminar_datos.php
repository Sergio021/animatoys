<?php
require_once 'conexion.php';
$conexion =conexion();

$ticket = $_POST['ticket'];
$sku = $_POST['sku'];

$sql = "DELETE FROM asocia WHERE no_ticket= '$ticket' and sku= '$sku'";
$resultado = mysqli_query($conexion, $sql);
?>
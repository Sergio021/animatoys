<?php
require_once 'conexion.php';
$conexion =conexion();

$sku = $_POST['sku'];

$sql = "DELETE FROM producto WHERE sku= '$sku'";
$resultado = mysqli_query($conexion, $sql);
?>
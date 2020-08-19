<?php
require_once("../../modelo/conexion.php");
$conexion = conexion();

?>
<!DOCTYPE html>
<html>
<head>
	<?php
	require_once('../estilos_principales/head_pages.php');
	?>
	<title>Gatos</title>
</head>
<body style="text-align:center; background-image: url('../img/f3.jpg');">
	<header>
		<?php
		require_once('../estilos_principales/header_pages.php');
		?>
	</header>
	<h1 style="color:#3B91E7;font-weight:bold;">Productos para perros</h1>
	<center><div class="container">
		<img src="../img/perrito.png" class="img-responsive imguard img-fluid ml-7">
	</div></center>
	<div class="row"style="margin-left: 5%;margin-right:5%;">
		<?php
		$sql="SELECT sku,nombre_producto,precio_unitario,imagen  FROM producto where mascota='perros'";
		$result = mysqli_query($conexion, $sql);
		while ($ver= mysqli_fetch_row($result)){
			?>

			<div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-3">
				<div style="height: 200px; overflow: hidden;">
					<img class="img-container" src="../img/productos/<?php echo $ver[3]?>">
				</div>
				<div style="height: 50px; overflow: hidden;">
					<p style="text-align: center;">
						<strong><?php echo $ver['1']; ?></strong><br>
					</p>
				</div>
				<div style="text-align: center; margin-bottom: 15px;">
					<strong>$<?php echo $ver[2];?> MXN</strong><br>
					<a href="producto.php?sku=<?php echo $ver[0];?>"  class="btn btn-primary">Ver información</a>				</button>
				</div>
			</div>

			<?php
		}
		?>
	</div>

	<footer style="background-color:#3B91E7;margin-bottom:0px;">
		<?php
		require_once('../estilos_principales/footer_pages.php');
		?>
	</footer>

</body>
</html>
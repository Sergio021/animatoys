<?php
	require_once"../../modelo/conexion.php";
	$conexion= conexion();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		require_once "../estilos_principales/head_pages.php";
	?>
</head>
<body>
	<header>
		<?php
			require_once "../estilos_principales/header_pages.php";
		?>
	</header>
	<main>
		<h1>Bienvendo <?php echo $_SESSION['id_admin'];?></h1>
		<div class="container my-3">
			<center>
				<img style=" width: 80%;" src="../img/logo.png">
			</center>
		</div>
	</main>
	<footer>
		<?php
			require_once "../estilos_principales/footer.php";
		?>
	</footer>
</body>
</html>
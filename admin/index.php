<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Animatoys - Administrador</title>
	<?php
	require_once "vista/estilos_principales/head.php";
	?>
	<style type="text/css">
		input{
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<?php
		require_once "vista/estilos_principales/header.php";
		?>	
	</header>
	<main>
		<div class="container">
			<h1>Iniciar sesión</h1>
			<form id="iniciar_sesion">
				<center>
				<div class="form-group">
					<label class="col-sm-3">Usuario:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="usuario" placeholder="Usuario" autocomplete="off" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3">Contraseña:</label>
					<div class="col-sm-5">
						<input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required>
					</div>
				</div>
					<button class="btn btn-primary mb-3" type="submit">Acceder</button>
				</center>
			</form>
			<div id="respuesta" class="my-3"></div>
		</div>
	</main>
	<footer>
		<?php
		require_once "vista/estilos_principales/footer.php";
		?>
	</footer>
	<script type="text/javascript" src="controlador/iniciar_sesion.js"></script>
</body>
</html>
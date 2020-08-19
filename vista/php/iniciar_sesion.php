<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar sesión</title>
	<?php
		require_once '../estilos_principales/head_pages.php';
	?>
</head>
<body>
	<header>
		<?php
			require_once '../estilos_principales/header_pages.php';
		?>
	</header>
	<main class="container my-4">
		<div class="row">
			<div class="col-md-6 container">
				<div class="container mb-5">
					<h2>Iniciar sesión</h2>
					<form id="inicia_sesion">
						<div class="form-group">
							<label>Correo electronico:</label>
							<input type="email" class="form-control" name="email" placeholder="Correo electronico">
						</div>
						<div class="form-group">
							<label>Contraseña:</label>
							<input type="password" class="form-control" name="password" placeholder="Contraseña">
						</div>
						<center>
							<button class="btn btn-primary" type="submit">Iniciar sesión</button>	
						</center>
					</form>
					<div id="respuesta" class="my-3">
					</div>
				</div>
			</div>
			

			<div class="col-md-6">
				<div class="container">
					<h2>¡Registrate!</h2>
					<form id="registro">
						<div class="form-group">
							<label>Nombre(s):</label>
							<input type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<label>Apellidos:</label>
							<input type="text" class="form-control" name="apellido">
						</div>
						<div class="form-group">
							<label>Fecha de nacimiento:</label>
							<input type="date" class="form-control" name="nacimiento">
						</div>
						<div class="form-group">
							<label>Correo electronico:</label>
							<input type="text" class="form-control" name="correo">
						</div>
						<div class="form-group">
							<label>Contraseña (8 caracteres): </label>
							<input type="password" class="form-control" name="pass">
						</div>
						<center>
							<button class="btn btn-primary" type="submit">Registrarse</button>	
						</center>
					</form>
					<div id="resp_registro" class="my-3"></div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<?php
			require_once'../estilos_principales/footer_pages.php';
		?>
	</footer>
	
	<script src="../../controlador/js/ini_sesion.js"></script>
</body>
</html>
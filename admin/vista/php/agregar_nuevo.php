<?php
require_once '../../modelo/conexion.php';
$conexion =conexion();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregar producto nuevo</title>
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
	<main class="container my-3">
		<h1>Agregar producto</h1>
		<form class="my-5" action="../../modelo/agregar.php?cod=registro" method="POST" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-9">
					<label >Nombre del producto</label>
					<input type="text" class="form-control" placeholder="Nombre del producto" name="producto">
				</div>
				<div class="form-group col-md-3">
					<label >Sku</label>
					<input type="text" class="form-control"  placeholder="SKU" name="sku">
				</div>
			</div>
			<div class="form-group">
				<label >Descripción</label>
				<input type="text" class="form-control" placeholder="Descripción del producto" name="desc">
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>Precio unitario</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">$</span>
						</div>
						<input type="number" step="0.01" class="form-control" placeholder="Precio unitario" name="precio">
					</div>
				</div>
				<div class="form-group col-md-3">
					<label>Disponibilidad</label>
					<input type="number" min="0" class="form-control" placeholder="Disponibilidad" name="disp">
				</div>
				<div class="form-group col-md-3">
					<label>Categoria</label>
					<select class="form-control" name="categoria">
						<option selected>Seleccione una opción</option>
						<option value="Alimento">Alimento</option>
						<option value="Collares y correas">Collares y correas</option>
						<option value="Higiene">Higiene</option>
						<option value="Hogar">Hogar</option>
						<option value="Juguete">Juguete</option>
						<option value="Ropa">Ropa</option>
						<option value="Salud">Salud</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label>Mascota</label>
					<select class="form-control" name="mascota">
						<option selected>Seleccione una opción</option>
						<option value="Perros">Perros</option>
						<option value="Gatos">Gatos</option>
						<option value="Caballos">Caballos</option>
						<option value="Conejos">Conejos</option>
						<option value="Roedores">Roedores</option>
						<option value="Peces">Peces</option>
						<option value="Reptiles">Reptiles</option>
						<option value="Aves">Aves</option>
						<option value="Perros y gatos">Perros y gatos</option>
						<option value="Conejo y roedores">Conejo y roedores</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="custom-file col-md-3">
					<input type="file" class="custom-file-input" name="img">
					<label class="custom-file-label">Seleccionar archivo</label>
				</div>
			</div>
			<input type="submit" class="btn btn-primary" name="registrar" value="Subir información">
		</form>
	</main>
	<footer>
		<?php
		require_once "../estilos_principales/footer.php";
		?>
	</footer>

</body>
</html>
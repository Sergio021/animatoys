<?php
	require_once "../../modelo/conexion.php";
	$conexion= conexion();
	session_start();
	if (!isset($_SESSION['id_admin'])) {
		header("location: ../../index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reptiles</title>
	<?php
		require_once "../estilos_principales/head_pages.php";
	?>
	<style type="text/css">
		.anch{
			width: 200px;
			color: #FFFFFF;
		}
		@media screen and (max-width: 576px){
			.img-principal{
				display: none;
			}
		}

	</style>
</head>
<body>
	<header>
		<?php
		require_once "../estilos_principales/header_pages.php";
		?>
		<script type="text/javascript" src="../../controlador/funciones.js"></script>
	</header>
	<main class="container">
		<h1>Reptiles</h1>
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<center>
					<a href="#Alimento" class="btn btn-primary my-2 anch">Alimento</a><br>
					<a href="#Juguetes" class="btn btn-primary my-2 anch">Juguetes</a><br>
					<a href="#Hogar" class="btn btn-primary my-2 anch">Hogar</a>
				</center>
			</div>
			<div class="col-sm-6 col-md-4">
				<center>
					<img class="img-principal" src="../img/tortuguita.png">
				</center>
			</div>
			<div class="col-sm-6 col-md-4">
				<center>
					<a href="#Salud" class="btn btn-primary my-2 anch">Salud</a><br>
					<a href="#Collares" class="btn btn-primary my-2 anch">Collares y correas</a><br>
					<a href="#Higiene" class="btn btn-primary my-2 anch">Higiene</a><br>
					<a href="#Ropa" class="btn btn-primary my-2 anch">Ropa</a>
				</center>
			</div>
		</div>
		<hr>

		<div id="tabla" class="mb-2"></div>

	</main>
	<footer>
		<?php
		require_once "../estilos_principales/footer.php";
		?>
	</footer>


<!-- Modal para editar-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		 <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar datos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input type="text" hidden="" id="sku" name="form-control input-sm">
					<label>Nombre</label>
					<input type="text" name="" id="nombre" class="form-control input-sm">
					<label>Descripción</label>
					<input type="text" name="" id="desc" class="form-control input-sm">
					<label>Precio unitario</label>
					<input type="number" min="0" step="0.01" id="precio" class="form-control input-sm">
					<label>Categoria</label>
					<select name="" id="categoria" class="form-control">
						<option value="Alimento">Alimento</option>
						<option value="Collares y correas">Collares y correas</option>
						<option value="Higiene">Higiene</option>
						<option value="Hogar">Hogar</option>
						<option value="Juguete">Juguete</option>
						<option value="Ropa">Ropa</option>
						<option value="Salud">Salud</option>
					</select>
					<label>Mascota</label>
					<select id="mascota" class="form-control" disabled>
						<option value="Perros">Perros</option>
						<option value="Gatos">Gatos</option>
						<option value="Caballos">Caballos</option>
						<option value="Conejos">Conejos</option>
						<option value="Roedores">Roedores</option>
						<option value="Peces">Peces</option>
						<option value="Reptiles">Reptiles</option>
						<option value="Aves">Aves</option>
						<option value="Perros y gatos">Perros y gatos</option>
						<option value="Conejo y Roedores">Conejo y Roedores</option>
					</select>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">Actualizar</button>
				</div>
			</div>
		</div>
	</div>



<!-- Modal para agregar disponibilidad-->
	<div class="modal fade" id="modalagrega" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		 <div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar a disponibilidad</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input type="text" hidden="" id="skua" name="form-control input-sm">
					<input type="text" hidden="" id="mascotaa" name="form-control input-sm">
					<label>Nombre del producto</label>
					<input type="text" name="" id="nombrea" class="form-control input-sm" disabled>
					<label>Candidad a agregar</label>
					<input type="number" min="0" value="0" id="cantidad" class="form-control input-sm">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal" id="agregar_suma">Actualizar</button>
				</div>
			</div>
		</div>
	</div>





	<script type="text/javascript">
		$(document).ready(function(){
			$("#tabla").load("cont_products.php?mascota=reptil");
		});
	</script>
	<script type="text/javascript">
		$('#actualizadatos').click(function(){
			actualizaDatos();
		});

		$('#agregar_suma').click(function(){
			sumar_disponibilidad();
		});
	</script>

</body>
</html>
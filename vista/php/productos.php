<?php
require_once'../../modelo/conexion.php';
require_once'../../controlador/busca_categoria.php';
$conexion = conexion();

$categorias = $_GET['categoria'];
$categoria= nombre_categoria($categorias);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Animatoys-<?php echo $categoria ?></title>
	

	<style type="text/css">
		h1, h2{
			text-align: center;
			color: #3B91E7;
		}
		.img-container{
			width: 90%;
			overflow: hidden;
			cursor: pointer;
		}
	</style>
	<?php
	require_once('../estilos_principales/head_pages.php');
	?>
</head>
<body>
	<header>
		<?php
		require_once('../estilos_principales/header_pages.php');
		?>
	</header>

	<main class="container">
		<h1><?php echo $categoria?></h1>

		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/perico.png" onclick="muestradatos('aves');" title="<?php echo $categoria ?> para aves">
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/perrito.png" onclick="muestradatos('perros');" title="<?php echo $categoria ?> para perros">
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/gatito.png" onclick="muestradatos('gatos');" title="<?php echo $categoria ?> para gatos">	
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/conejito.png" onclick="muestradatos('conejo');" title="<?php echo $categoria ?> para conejos">
			</div>			
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/tortuguita.png" onclick="muestradatos('reptiles');" title="<?php echo $categoria ?> para reptiles">
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/hamster.png" onclick="muestradatos('roedores');" title="<?php echo $categoria ?> para roedores">
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/caballo.png" onclick="muestradatos('caballos');" title="<?php echo $categoria ?> para caballos">
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<img class="img-container" src="../img/pez.png" onclick="muestradatos('peces');" title="<?php echo $categoria ?> para peces">
			</div>
		</div>

		<hr>

		<div id="productos">
		</div>
		
	</main>
	<footer>
		<?php
		require_once('../estilos_principales/footer_pages.php');
		?>
	</footer>


	<script type="text/javascript">
		function muestradatos(mascota){
			var categoria= "<?php echo $categorias ?>";
			//alert(categoria+" para "+mascota);
			
			$("#productos").load("categoria.php?categoria="+categoria+"&mascota="+mascota);
			location.href="#productos";
		}
	</script>



</body>
</html>
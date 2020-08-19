<?php
require_once("../../modelo/conexion.php");
$conexion = conexion();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Productos adquiridos</title>
	<?php
	require_once "../estilos_principales/head_pages.php";
	?>
	<script type="text/javascript" src="../../controlador/js/funciones.js"></script>
</head>
<body>
	<header>
		<?php
		require_once "../estilos_principales/header_pages.php";
		if (isset($_SESSION['id_usuario'])) {
			
		}
		else{
			header("Location: carrito_conectarse.php");
		}
		?>	
	</header>
	<main>

		<h1>Mi carrito</h1>
		<div class="my-4" id="apartados"></div>
		
	</main>
	<footer>
		<?php
		require_once "../estilos_principales/footer_pages.php";
		?>
	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#apartados").load("carro_apart.php");
		});
	</script>

	<script type="text/javascript">
		function pagar(total, ticket){
			tarjeta=$("#tarjeta").val();
			if (tarjeta == "") {
				alert("Ingrese un numero de tarjeta valido");
			}
			else{
				pagar_ahora(total, ticket, tarjeta);
			}
		}
	</script>
</body>
</html>
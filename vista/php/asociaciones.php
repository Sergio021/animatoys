<!DOCTYPE html>
<html>
<head>
	<title>Asociaciones solidarias</title>
	<?php
	require_once('../estilos_principales/head_pages.php');
	?>
	<style type="text/css">
		h1, h2{
			text-align: center;
			color: #3B91E7;
		}
		.img-container{
			width: 90%;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<header>
		<?php
		require_once('../estilos_principales/header_pages.php');
		?>
	</header>

	<main class="container">
		<h1>Asociaciones solidarias</h1>
		<b>Actualmente trabajamos con diversas asociaciones solidarias, en apoyo a animales que necesitan de nuestra ayuda, Algunas de nuestras empresas con las que trabajamos son:</b>

		<div class="card my-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img style="width: 90%; margin-top: 8%; margin-left: 5%" src="../img/asociaciones/adoptare.jpg">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5>Adoptare.org</h5>
						<p class="card-text">
							Adoptare es una plataforma digital cuyo objeto es promover la adopción de perros y gatos sin hogar, ofreciendo un puente de comunicación entre las instancias que albergan a los animales y la gente que desea realizar una adopción responsable. Porque amamos profundamente a los animales, Adoptare propone una serie de políticas y recomendaciones que garanticen las mejores prácticas en el proceso de adopción.
							<br>
							<a href="https://adoptare.org">Ir al sitio</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>

		<div class="card my-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img style="width: 50%; margin-left: 25%; margin-top: 8%;" src="../img/asociaciones/milagros_caninos.jpg">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5>Milagros caninos</h5>
						<p class="card-text">
							Milagros Caninos es el primer Santuario en América Latina para perros en situaciones extremas. Nos dedicamos al cuidado y rehabilitación de perros con cáncer, sin patas, ciegos, sordos, quemados, torturados, paralíticos, violados, y drogados, entre otras condiciones.
							<br><br>
							Te invitamos a que conozcas a los casi 300 perros que viven con nosotros, sus historias y sus sonrisas.
							<br>
							<a href="https://www.milagroscaninos.org">Ir al sitio</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
		
	</main>

	<footer>
		<?php
		require_once('../estilos_principales/footer_pages.php');
		?>
	</footer>
</body>
</html>
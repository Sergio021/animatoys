<!DOCTYPE html>
<html>
<head>
	<?php
	require_once('vista/estilos_principales/head.php');
	?>
	
</head>

<body style="text-align:center;background-image: url('vista/img/f3.jpg');">
	<header>
		<?php
		require_once('vista/estilos_principales/header.php');
		?>
	</header>
	<!--Comienza carousel-->

	<center><div id="imagenes" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="vista/img/c5.jpg" height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vista/img/c0.jpg" height="450"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vista/img/c6.jpg" height="450"  alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vista/img/c7.jpg" height="450"  alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vista/img/c2.jpg" height="450"  alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="vista/img/c3.jpg" height="450"  alt="Third slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#imagenes" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#imagenes" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
	<!--Termina Carousel-->

	<!--Mensaje de bienvenida-->

	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<h1 style="color:#3B91E7;font-size:45px;font-weight:bold;">¡BIENVENIDO A ANIMATOYS!</h1>
		<br>
		<p style="color:black;font-size:30px;font-weight:bold;">Aquí encontrarás los mejores artículos para tus mascotas,<br>
		 consulta nuestro catálogo ¡ya!</p>
		 <br>
		 <br>
		 <br>
		 <br>
		
	</div>
	<!--fin de mensaje-->

	<!--informes sobre la compra-->
	<div class="container-fluid cont3" style="background-color:#3B91E7;">

		<div class="row d-flex justify-content-around " >
			<figure>
				<i class="fa fa-lock fa-5x" aria-hidden="true" style="color:white"></i>
				<figcaption class="figure-caption texticonsec3"style="color:white;font-weight:bold;font-size:30px;">Compra Segura</figcaption>
			</figure>
						
			<figure>
			     <i class="fa fa-bus fa-5x" aria-hidden="true" style="color:white;margin-top:5px;"></i>
			     <br><figcaption class="figure-caption texticonsec3" style="color:white;font-weight:bold;font-size:30px; margin-top:0px;">Envíos gratis</figcaption>
			</figure>
					
			<figure><i class="fa fa-credit-card-alt fa-5x" aria-hidden="true" style="color:white;margin-top:5px;"></i>
				<figcaption class="figure-caption texticonsec3" style="color:white;font-weight:bold;font-size:30px; margin-top:0px;">Pagos Accesibles</figcaption>
			    </figure>
				
		</div>
	</div>
	<!--fin de informe de la compra-->


	<!--Se muestran algunos articulos-->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container-fluid cont3" style="background-color:#3B91E7;height:200px">
		<marquee height="200" behavior="scroll">
			<img src="vista/img/texto.jpg" >
			<img class="responsive"src="vista/img/recorte1.jpg" width="150" height="200">
			<img src="vista/img/recorte2.jpg" width="250" height="200">
			<img src="vista/img/recorte3.jpg" width="200" height="200">
			<img src="vista/img/recorte4.jpg" width="200" height="200">
			<img src="vista/img/recorte5.jpg" width="200" height="200">
			<img src="vista/img/recorte6.jpg" width="200" height="200">
			<img src="vista/img/texto.jpg" >
			<img src="vista/img/recorte7.jpg" width="250" height="200">
			<img src="vista/img/recorte8.jpg" width="250" height="200">
			<img src="vista/img/recorte9.jpg" width="250" height="200">
			<img src="vista/img/recorte10.jpg" width="250" height="200">		
			<img src="vista/img/recorte11.jpg" width="250" height="200">
			<img src="vista/img/recorte12.jpg" width="250" height="200">
			<img src="vista/img/texto.jpg" >

		</marquee>
	</div>
	<br>
	<br>
	<!--Fin de mostrar articulos-->

<footer>
	<?php
	require_once('vista/estilos_principales/footer_pages.php');
	?>
</footer>
</body>

</body>
</html>
	<title>AnimaToys</title>
	<link rel="stylesheet" href="vista/bootstrap/css/bootstrap.min.css">
	<script src="controlador/js/jquery_3_4_1.js"></script>
    <script src="controlador/js/popper.min.js"></script>
    <script src="controlador/js/bootstrap.min.js"></script>
    <script src="controlador/js/jquery.js"></script>
    <script src="controlador/js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" href="vista/font/css/font-awesome.min.css">
	<link rel="stylesheet" href="vista/css/estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="vista/img/icono.png">
	<script type="text/javascript">
		$(document).ready(main);

		var contador = 1;

		function main () {
			$('.menu_bar').click(function(){
				if (contador == 1) {
					$('nav').animate({
						left: '0'
					});
					contador = 0;
				} else {
					contador = 1;
					$('nav').animate({
						left: '-100%'
					});
				}
			});

	// Mostrar y ocultar submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
</script>
	<title>AnimaToys</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	
	<script type="text/javascript" src="../../controlador/js/jquery.js"></script>
    
    <script src="../bootstrap/js/bootstrap.js"></script>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<script src="../../controlador/js/jquery_3_4_1.js"></script>
    
    <script src="../../controlador/js/popper.min.js"></script>
    
    <script src="../../controlador/js/ajax.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../font/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="shortcut icon" href="../../../vista/img/icono.png">

	<link rel="stylesheet" href="../../controlador/js/alertify/css/alertify.css">
	<link rel="stylesheet" href="../../controlador/js/alertify/css/themes/default.css">
	<script type="text/javascript" src="../../controlador/js/alertify/alertify.js" ></script>


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
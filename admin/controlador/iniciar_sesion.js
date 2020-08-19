
//console.log('funcionando');

var iniciar_sesion = document.getElementById('iniciar_sesion');
var respuesta = document.getElementById('respuesta');

iniciar_sesion.addEventListener('submit', function(e){
	e.preventDefault();
	//console.log("Me diste un click")

	var datos = new FormData(iniciar_sesion);

	/*console.log(datos);
	console.log(datos.get('usuario'))
	console.log(datos.get('contraseña'))
	return false;*/


	fetch('modelo/iniciar_sesion.php',{
		method: "POST",
		body: datos
	})

	.then(res => res.json())
	.then(data => {
//		console.log(data)
		if(data === 'error'){
			respuesta.innerHTML = "<div class='alert alert-danger'>Error: Favor de verificar tus datos</div>";			
		}
		 else{
			window.location.href= "vista/php/inicio.php";
		}
	})
})
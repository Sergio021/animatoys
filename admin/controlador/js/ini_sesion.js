console.log('funcionando');

var iniciar_sesion = document.getElementById('inicia_sesion');
var respuesta = document.getElementById('respuesta');

iniciar_sesion.addEventListener('submit', function(e){
	e.preventDefault();
	console.log("Me diste un click")

	var datos = new FormData(iniciar_sesion);

	/*console.log(datos);
	console.log(datos.get('email'))
	console.log(datos.get('password'))
	*/
	
	fetch('../../modelo/ini_sesion.php',{
		method: "POST",
		body: datos
	})

	.then(res => res.json())
	.then(data => {
		console.log(data)
		if( data === 'Correcto'){
			window.location.href= "../../index.php";
		}
		 else{
			respuesta.innerHTML = "<div class='alert alert-danger'>Error: Favor de verificar tus datos</div>";
		} 
	})
})


var registrarse = document.getElementById('registro');
var resp_registro = document.getElementById('resp_registro');

registrarse.addEventListener('submit', function(e){
	e.preventDefault();
	//console.log("Me diste click 2 :V");

	var reg = new FormData(registrarse);
	/*console.log(reg);
	console.log(reg.get('nombre'))
	console.log(reg.get('apellido'))*/
	fetch('../../modelo/registrarse.php',{
		method: "POST",
		body: reg
	})

	.then(res => res.json())
	.then (data=> {
		//console.log(data)
		if (data == "correcto"){
			resp_registro.innerHTML = "<div class='alert alert-success'>Se ha registrado su correo <br> Ingrese con su cuenta</div>"
		}
		else{
			resp_registro.innerHTML= "<div class='alert alert-danger'>Error: ha ocurrido un problema <br>Verfique sus datos</div>"	
		}
	})
})
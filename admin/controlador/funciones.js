function agregaform(datos){
	
	d=datos.split('||');

	$('#sku').val(d[0]);
	$('#nombre').val(d[1]);
	$('#desc').val(d[2]);
	$('#precio').val(d[3]);
	$('#categoria').val(d[7]);
	$('#mascota').val(d[6]);
}

function actualizaDatos(){
	sku=$('#sku').val();
	nombre=$('#nombre').val();
	desc=$('#desc').val();
	precio=$('#precio').val();
	categoria=$('#categoria').val();
	mascota=$('#mascota').val();
	cadena="sku=" + sku +"&nombre=" + nombre + "&desc=" + desc + "&precio=" + precio + "&categoria=" + categoria + "&mascota=" + mascota;

	$.ajax({
		type: "POST",
		url:"../../modelo/actualiza_datos.php",
		data: cadena,
		success:function(r){
			if(r=1){
				$("#tabla").load("cont_products.php?mascota="+mascota);
				alertify.success("Actualizada con exito");
			}
			else{
				alertify.error("Fallo el servidor");
			}
		}
	})	
}

function disponibilidad(datos){
	d=datos.split('||');

	$('#skua').val(d[0]);
	$('#nombrea').val(d[1]);
	$('#mascotaa').val(d[2]);
	$('#cantidad').val('0');
}

function sumar_disponibilidad(){
	sku=$('#skua').val();
	cantidad=$('#cantidad').val();
	cadena= "sku="+sku+"&cantidad="+cantidad;
	mascota= $('#mascotaa').val();

	$.ajax({
		type: "POST",
		url:"../../modelo/agregar_disp.php",
		data: cadena,
		success:function(r){
			if(r=1){
				$("#tabla").load("cont_products.php?mascota="+mascota);
				alertify.success("Actualizada con exito");
			}
			else{
				alertify.error("Fallo el servidor");
			}
		}
	})
}


function pregunta(sku, mascota){
    alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar producto?',
    function(){
        eliminar_datos(sku, mascota)
    },function(){
        alertify.error('Cancelado')
    });
}

function eliminar_datos(sku, mascota){
	cadena= "sku="+sku;
    $.ajax({
        type:"POST",
        url:"../../modelo/eliminar.php",
        data: cadena,
        success:function(r){
            if (r=1) {
                $("#tabla").load("cont_products.php?mascota="+mascota);
                alertify.success("El producto se ha eliminado");
            }
            else{
                alertify.error("Error con el servidor");
            }
        }
    })
}
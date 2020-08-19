function agregaprod(codigo, cantidad){
    cadena= "producto="+codigo+"&cantidad="+cantidad;
    $.ajax({
        type: "POST",
        url: "../../modelo/agregar_carrito.php",
        data: cadena,
        success: function(r){
            if (r=1) {
                alertify.success("El producto se ha agregado al carrito");
            }else{
                alertify.error("El producto ya ha sido agregado al carrito");
            }
        }
    });
}


function pregunta(ticket, sku){
    cadena= "ticket="+ticket+"&sku="+sku;
    alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar producto del carrito?',
    function(){
        eliminar_datos(cadena)
    },function(){
        alertify.error('Cancelado')
    });
}

function eliminar_datos(cadena){
    $.ajax({
        type:"POST",
        url:"../../modelo/eliminar_datos.php",
        data: cadena,
        success:function(r){
            if (r=1) {
                $("#apartados").load("carro_apart.php");
                alertify.success("El producto se ha eliminado del carrito");
            }
            else{
                alertify.error("error con el servidor");
            }
        }
    })
}



function pagar_ahora(total, ticket, tarjeta){
    cadena = "total="+total+"&ticket="+ticket+"&tarjeta="+tarjeta;
    $.ajax({
        type:"POST",
        url:"../../modelo/pagar.php",
        data: cadena,
        success:function(r){
            if (r=1) {
                $("#apartados").load("carro_apart.php");
                alertify.success("La compra se ha realizado exitosamente");
            }
            else{
                alertify.error(":´V)/ error con el servidor");
            }
        }
    }) 
}
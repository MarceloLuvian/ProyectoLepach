$(document).ready(pagination(1));


function pagination(partida){
        var url = 'assets/js/ventas/paginarProductos.php';
        $.ajax({
                type:'POST',
                url:url,
                data:'partida='+partida,
                success:function(data){
                        var array = eval(data);
                        $('#agrega-registros').html(array[0]);
                        $('#pagination').html(array[1]);
                }
        });
        return false;
}



function agregarcarrito(id){
     var parametros = {
                "ID" : id
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/ventas/agregarcarrito.php',
                type:  'post',
                beforeSend: function () {
                        $("#carrito").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carrito").html(response);
                }
        });
}

function quitar(id){
     var parametros = {
                "ID" : id
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/ventas/quitar.php',
                type:  'post',
                beforeSend: function () {
                        $("#carrito").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carrito").html(response);
                }
        });
}

function vender(){
	if ($('#pago').val() == "") {
 javascript:alert("Falta el monto de pago! :)");
	}else{



	  var txt = "¿Esta seguro que desea continuar con la venta? :)";
    if(confirm(txt)){
    		var parametros = {
                "monto" : $('#pago').val()
        };
	 $.ajax({
                data:  parametros,
                url:   'assets/js/ventas/vender.php',
                type:  'post',
                beforeSend: function () {
                        $("#pruebas").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#pruebas").html(response);
                }
        });
	}
	}
}
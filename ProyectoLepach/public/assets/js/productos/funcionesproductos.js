$(document).ready(pagination(1));
function cargarproductos(){
       
        $.ajax({
                data:  "",
                url:   'assets/js/productos/cargarproductos.php',
                type:  'post',
                beforeSend: function () {
                        $("#listaproductos").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#listaproductos").html(response);
                }
        });
}

function editar(id){
     var parametros = {
                "ID" : id
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/productos/editar.php',
                type:  'post',
                beforeSend: function () {
                        $("#edicion").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#edicion").html(response);
                }
        });
}

function eliminarproducto(id){

         var txt = "¿Esta seguro que desea eliminar este producto? :(";
    if(confirm(txt)){

     var parametros = {
                "ID" : id
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/productos/eliminar.php',
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


function actualizar(id){
     var parametros = {
                "ID" : id,
                 "descripcion" : $('#des').val(),
                "preciocompra" : $('#precomm').val(),
                "precio" : $('#pre').val(),
                "cantidad" : $('#can').val()
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/productos/actualizar.php',
                type:  'post',
                beforeSend: function () {
                        $("#edicion").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#edicion").html(response);
                }
        });
}

function limpiar(){
              document.getElementById("desc").value="";
               document.getElementById("prec").value="";
                document.getElementById("cant").value="";
                document.getElementById("precom").value="";

}

function guardar(){

        if ($('#desc').val() == "")  {
        javascript:alert("El campo Descripcion no puede estar vacio :)");
}else if ( $('#prec').val() == "")  {
 javascript:alert("El campo precio de venta no puede estar vacio :)");

}else if ( $('#precom').val() == "" ) {
        javascript:alert("El campo precio de compra no puede estar vacio :)");
}else if ( $('#cant').val() == "") {
javascript:alert("El campo Cantidad no puede estar vacio :)");

}else{



        var txt = "¿Esta seguro de que desea continuar? :)";
    if(confirm(txt)){
     var parametros = {
                "descripcion" : $('#desc').val(),
                "preciocompra" :$('#precom').val(),
                "precio" : $('#prec').val(),
                "cantidad" : $('#cant').val()
        };
         $.ajax({
                data:  parametros,
                url:   'assets/js/productos/guardar.php',
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


  function cargarContenido()
    {
       
    window.location.reload(); 

    }



function pagination(partida){
        var url = 'assets/js/productos/paginarProductos.php';
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

    
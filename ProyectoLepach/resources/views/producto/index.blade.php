@extends('app')

@section('content')

<script src="assets/js/jquery.js"></script>
<script src="assets/js/productos/funcionesproductos.js"></script>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



</head>


<body >

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ route('inicio.index') }}">
                        Actividades
                    </a>
                </li>

                <li>
                 <a  href="{{ route('productos.index') }}"> <span class="glyphicon glyphicon-list-alt"></span>   Productos</a>
             </li>
             <li>
                <a href="{{ route('ventas.index') }}"> <span class="glyphicon glyphicon-inbox"></span>   Ventas</a>
            </li>
            <li>
                <a href="{{ route('usuarios.index') }}"> <span class="glyphicon glyphicon-user"></span>   Usuarios</a>
            </li>
            <li>
                <a href="{{ route('copias.index') }}"><span class="glyphicon glyphicon-file"></span>  Control de copias</a>
            </li>
            <li>
                <a href="{{ route('reportes.index') }}"><span class="glyphicon glyphicon-book"></span>   Reportes</a>
            </li>
            <li>
                <a href="{{ route('recargas.index') }}"><span class="glyphicon glyphicon-repeat"></span>  Control de recargas</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Productos</h1>


                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    <a class="btn btn-primary pull-right" href='#modal2' data-uk-modal >Nuevo producto</a>
                </div>

            </div>
            <br>
            <br>
            <!-- Contenido y funciones -->
            <div class="panel panel-info">
              <div class="panel-heading"><strong>LISTA DE PRODUCTOS</strong></div>
              <div class="panel-body">
                <div >
                   <div class="registros" id="agrega-registros"></div>
                   <center>
                    <ul class="pagination" id="pagination"></ul>
                </center>

            </div>
            <div  id="carrito">
            </div>
        </div>
    </div>




</div>
</div>

</div>


<!-- /#wrapper -->


<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

<div id="pruebas" class="container"></div>
</body>

</html>

<!-- This is the modal -->
<div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <h2>Editar producto</h2>
        <br>
        <div class="container">
            <div class="container col-md-4" >
                <div id="edicion">

                </div>

            </div>
        </div>
        <br>
        <br>
    </div>
</div>

<div id="modal2" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <h2>Nuevo Producto</h2>
        <br>
        <div class="container">
            <div class=" col-md-4" >


                <div class="input-group col-md-6">
                    <label  for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="desc" placeholder="Galletas" >
                </div>
                <div class="input-group col-md-6">
                    <label for="precio" >Precio compra</label>
                    <input type="number" class="form-control" id="precom" placeholder="8.00" >
                </div>
                <div class="input-group col-md-6">
                    <label for="precio" >Precio venta</label>
                    <input type="number" class="form-control" id="prec" placeholder="19.49" >
                </div>


                <div class="input-group col-md-6">
                    <label  for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cant" placeholder="10" >
                </div>
                <br>
                <br>
                <div>
                    <button class="btn btn-primary " onclick="guardar()"> Guardar </button>

                </div>


            </div>
        </div>
        <br>
        <br>
    </div>
</div>


@endsection
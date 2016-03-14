@extends('app')

@section('content')
 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/ventas/funcionesventas.js"></script>
<!DOCTYPE html>
<html lang="es" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

 

</head>

<body  >
	<body >

    <div id="wrapper" >

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
                      
									
								  <h1>Ventas</h1>
								  <img src="assets/lepach.jpg">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                      
                   
                        <input class="pull-right" type="number" name="pago" id="pago" placeholder="Monto de pago">
                     	 

                     	   <button class="btn btn-primary " onclick="vender()">Vender</button>

                    </div>

                </div>
                   <br>
                   <br>
<!-- Contenido y funciones -->

      <div class="row">

                <div class="col-md-12">
                    <div class="col-md-8">

                        <div class="panel panel-info">
                            <div class="panel-heading"> <strong>PRODUCTOS</strong></div>
                            <div class="panel-body">
                                <div class="">
                                   <div class="registros" id="agrega-registros"></div>
                                   <center>
                                    <ul class="pagination" id="pagination"></ul>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel panel-info">
                          <div class="panel-heading"><strong>PRODUCTOS AGREGADOS</strong></div>
                      <div class="panel-body">
                        
                         <div  id="carrito">
                    </div>
                </div>
            </div>
             <div class="panel panel-info pull-right">
                            <div class="panel-heading"> <strong>CAMBIO</strong></div>
                            <div class="panel-body" id="pruebas">
                              
                        </div>
                    </div>
          
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
   

</body>
</body>


</html>



@endsection
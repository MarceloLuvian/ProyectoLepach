
@extends('app')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
 
    <script src="assets/js/jquery.js"></script>
  	<script src="assets/js/reportespdf/funcionesreportes.js"></script>
    
  
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    

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
                        <h1>Reportes</h1>


                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">Menu</a>
                       
                           <a class="btn btn-danger " href="#" >Generar PDF</a>
                         <a class="btn btn-primary " href="#" >Generar reporte</a>
                                                          
                                  <div class="col-sm-4 col-xs-4">
                                    <div class="input-group">
                                         <span class="input-group-addon">Fecha de inicio: </span>
                                    <input type="date" name="fecha" id="input" class="form-control" required>
                                    <span class="input-group-addon"> </span>
                                    </div>                                  
                                  </div>

                                   <div class="col-sm-4 col-xs-4">
                                    <div class="input-group">
                                         <span class="input-group-addon">Fecha de corte: </span>
                                    <input type="date" name="fecha" id="input" class="form-control" required>
                                     <span class="input-group-addon"> </span>
                                    </div>   

                                  </div>
                              
                    </div>

                </div>
                   <br>
                   <br>
<!-- Contenido y funciones -->

    <div class="panel panel-info">
              <div class="panel-heading"><strong>REPORTE GENERADO</strong></div>
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
   
<div class="container">
	<div align="center">
		
	</div>

</div>



</body>

</html>


@endsection
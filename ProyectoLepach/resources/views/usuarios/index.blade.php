
@extends('app')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
 
    <script src="assets/js/jquery.js"></script>
  	<script src="assets/js/funcionesusuarios.js"></script>
  
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
                    <a href="#"><span class="glyphicon glyphicon-book"></span>   Reportes</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-repeat"></span>  Control de recargas</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Usuarios</h1>


                        <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Menu</a>
                         <a class="btn btn-primary pull-right" href="#" >Nuevo usuario</a>
                    </div>

                </div>
                   <br>
                   <br>
<!-- Contenido y funciones -->

    <div class="container col-md-12" >
        <div id="listaproductos">
            <table class="table">
    		<thead>
    			<th>Usuario</th>
    			<th>correo</th>    			
    			<th>acciones</th>
    			
    		</thead>
    		<tbody id="datos">
    		@foreach ($usuarios as $user)
		<tr>

			<td> {{ $user->name }} </td> 
			<td> {{ $user->email }} </td>
			
		
		<td> <input type="hidden" name="_token" id="token">
				<a  href="#" onclick="mostrarcontra('{!! $user->id !!}')"  > <span class="glyphicon glyphicon-eye-open"></span> </a>
		</td>
			<input type="hidden" name="_token" value="{{ CSRF_TOKEN() }}" id="token">
			<td> <a  href="{!! route('usuarios.index') !!}" onclick="eliminar('{!! $user->id !!}')" value="{{ CSRF_TOKEN() }}"> <span class="glyphicon glyphicon-trash"></span> </a></td>
		</tr>
	
@endforeach
    		</tbody>
    	</table>
    	<div align="center">
	{!! $usuarios->render() !!}
	

	
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
		<input  width="50" align="center" type="text" id="contra">
	</div>

</div>



</body>

</html>


@endsection
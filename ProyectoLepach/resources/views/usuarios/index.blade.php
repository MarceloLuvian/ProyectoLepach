
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
                        <h1>Usuarios</h1>


                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                         <a class="btn btn-primary pull-right" href='#modal2' data-uk-modal >Nuevo usuario</a>
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
			
		
		<!-- <td> <input type="hidden" name="_token" id="token">
				<a  href="#" onclick="mostrarcontra('{!! $user->id !!}')"  > <span class="glyphicon glyphicon-eye-open"></span> </a>
		</td> -->
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
   




</body>

</html>

<div id="modal2" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <h2>Nuevo Usuario</h2>
        <br>
        <div class="container">
            <div class=" col-md-4" >
        
 


 
                <div class="panel-body">
                    {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!}

                        <div class="form-group">
                            <label>{{ trans('form.label.name') }}</label>
                            {!! Form::input('text', 'name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ trans('form.label.email') }}</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ trans('form.label.password') }}</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.password_confirmation') }}</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::submit(trans('form.signup.submit'),['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
         





            </div>
        </div>
        <br>
        <br>
    </div>
</div>
@endsection
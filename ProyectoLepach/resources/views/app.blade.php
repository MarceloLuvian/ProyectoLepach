<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Punto de venta LEPACH</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/simple-sidebar.css') !!}
    {!! Html::style('assets/css/uikit.css') !!}
    <!-- Fonts -->
    
</head>
<body>
	@include('partials.layout.navbar')
	@include('partials.layout.errors')
    @yield('content')
    <!-- Scripts -->
   
  {!! Html::script('assets/js/jquery.js') !!}
  {!! Html::script('assets/js/uikit.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}


</body>
</html>
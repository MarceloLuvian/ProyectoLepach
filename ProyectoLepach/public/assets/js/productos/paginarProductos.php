<?php
	include('connect.php');
	$paginaActual = $_POST['partida'];
 mysqli_query($connect,"SET NAMES 'utf8'");
    $nroProductos = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM producto"))  ;
    $nroLotes = 11;
    $nroPaginas = ($nroProductos/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista."<li><a href='javascript:pagination(".($paginaActual-1).");'>Anterior</a></li>";
    }
    for($i=1; $i <= $nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista."<li class='active'><a href='javascript:pagination(".$i.");'>".$i."</a></li>";
        }else{
            $lista = $lista."<li><a href='javascript:pagination(".$i.");'>".$i."</a></li>";
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista."<li><a href='javascript:pagination(".($paginaActual+1).");'>Siguiente</a></li>";
    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}
  mysqli_query($connect,"SET NAMES 'utf8'");
  	$registro = mysqli_query($connect,"SELECT *FROM producto limit ".$limit.", ".$nroLotes."  ");


  	$tabla = $tabla."<table class='uk-table uk-table-hover  uk-table-condensed'>
			            <tr>
			                <th>Fecha </th>
			                <th >Descripcion</th>
                      <th >precio compra</th>
			                <th >Precio venta</th>
			                <th >Cantidad</th>
			               <th >Vendidos</th>
                     <th >Restantes</th>
                     <th >Total Vendidos</th>
                     <th >Acciones</th>
			            </tr>";
				

	while($registro2 = mysqli_fetch_array($registro)){
		$tabla = $tabla."<tr>
							<td>".$registro2["fecha"]."</td>
							<td>".$registro2["descripcion"]."</td>
                <td>$".$registro2["preciocompra"]."</td>
							<td> $".$registro2["precio"]."</td>
							<td> ".$registro2["cantidad"]."</td>
							<td> ".$registro2["vendidos"]."</td>
							<td> ".$registro2["restantes"]."</td>
              <td> $".$registro2["totalvendidos"]."</td>
              <td>  <a  href='#my-id' data-uk-modal onclick='editar(".$registro2["id"].")'><span class='glyphicon glyphicon-pencil'></span></a> <a  onclick='eliminarproducto(".$registro2["id"].")' ><span class='glyphicon glyphicon-remove'></span></a> </td>
						  </tr>";		
	}
        

    $tabla = $tabla."</table>";



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);

    mysqli_close($connect);

    
?>
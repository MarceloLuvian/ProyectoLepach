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


  	$tabla = $tabla." <div class='uk-overflow-container'>
      
     <table class='uk-table uk-table-hover   uk-table-condensed'>
			            <tr>
			                
			                <th >Descripcion</th>                      
			                <th >Precio </th>
			                <th >Cantidad</th>
			               <th >Vendidos</th>
                   
                     <th >Total </th>
                     <th >Acciones</th>
			            </tr>";
				

	while($registro2 = mysqli_fetch_array($registro)){
    if($registro2["cantidad"] > 0){
          $tabla = $tabla."<tr>
              
              <td>".$registro2["descripcion"]."</td>
               
              <td class='uk-text-center'> $".$registro2["precio"]."</td>
              <td class='uk-text-center'> ".$registro2["cantidad"]."</td>
              <td class='uk-text-center'> ".$registro2["vendidos"]."</td>
              
              <td class='uk-text-center'> $".$registro2["totalvendidos"]."</td>
              <td class='uk-text-center'>  <a  onclick='agregarcarrito(".$registro2["id"].");pagination(1)'><span class='glyphicon glyphicon-plus-sign'></span></a>  </td>
              </tr>";   
  
    }else
    $tabla = $tabla."<tr>
              
              <td>".$registro2["descripcion"]."</td>
               
           <td class='uk-text-center'> $".$registro2["precio"]."</td>
              <td class='uk-text-center'> ".$registro2["cantidad"]."</td>
              <td class='uk-text-center'> ".$registro2["vendidos"]."</td>
              
              <td class='uk-text-center'> $".$registro2["totalvendidos"]."</td>
              <td>  <a class='warning'><span class=' ' disabled></span></a>  </td>
              </tr> </div>";   
  
		
    }
        

    $tabla = $tabla."</table>";



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);

    mysqli_close($connect);

    
?>
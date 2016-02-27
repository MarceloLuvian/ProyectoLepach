<?php 
include('connect.php');

$id = $_POST['ID'];

$consulta= mysqli_query($connect, "SELECT id_producto from carrito where id_carrito = '".$id."' ");
$total = 0;
foreach ($consulta as $key) {
mysqli_query($connect,"UPDATE producto SET cantidad = cantidad+1 where id = '".$key["id_producto"]."'");	
}



$respuesta = mysqli_query($connect, "DELETE from carrito where id_carrito = ('".$id."') ");

if($respuesta){

	$producto = mysqli_query($connect, "SELECT descripcion, precio,id_carrito, id_producto from producto inner join carrito on producto.id = carrito.id_producto");

echo "<div class='uk-overflow-container'>";
echo "<table class='uk-table uk-table-hover uk-table-striped uk-table-condensed'>";
echo "<tr> <th> Descripcion </th> <th> Precio </th>  <th> Acciones </th> </tr>";


	foreach ($producto as $row ) {
	$total = $row["precio"] + $total;
	 echo " <td>".$row["descripcion"]."</td> <td>$".$row["precio"]."</td> <td> <a onclick='pagination(1);quitar(".$row["id_carrito"].");pagination(1)'><span class='glyphicon glyphicon-remove'></span></a> </td> ";
    echo " </tr>\n ";

	}
	echo "</div>";
echo "</div>";

echo "<div class='uk-overflow-container'>";
echo "<table class='uk-table uk-table-hover uk-table-striped uk-table-condensed'>";
echo "<tr> <th> Total </th> </tr>";
echo " <td>$".$total."</td>  ";
    echo " </tr>\n ";
    echo "</div>";

}

mysqli_close($connect);

 ?>
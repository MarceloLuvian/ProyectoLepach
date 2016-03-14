<?php 

include('connect.php');

$id = $_POST['ID'];
mysqli_query($connect,"UPDATE producto SET cantidad = cantidad-1 where id = '".$id."'");

$respuesta = mysqli_query($connect, "INSERT INTO carrito (id_producto) VALUES ('".$id."') ");
$total = 0;
if($respuesta){
	mysqli_query($connect,"SET NAMES 'utf8'");

	$producto = mysqli_query($connect, "SELECT descripcion, precio, id_carrito ,id_producto from producto inner join carrito on producto.id = carrito.id_producto");

echo "<div class='uk-overflow-container'>";
echo "<table class='uk-table uk-table-hover  uk-table-condensed'>";
echo "<tr> <th> Descripcion </th> <th> Precio </th>  <th> Acciones </th> </tr>";


	foreach ($producto as $row ) {
	$total = $row["precio"] + $total;
	 echo " <td>".$row["descripcion"]."</td> <td>$".$row["precio"]."</td> <td> <a onclick='quitar(".$row["id_carrito"].");pagination(1);'><span class='glyphicon glyphicon-remove'></span></a> </td> ";
    echo " </tr>\n ";

	}
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
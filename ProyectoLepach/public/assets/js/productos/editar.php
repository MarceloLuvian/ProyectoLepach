<?php 

include ("connect.php"); 

$id= $_POST['ID'];
 mysqli_query($connect,"SET NAMES 'utf8'");
$productos = mysqli_query($connect,  "SELECT *from producto where id = '".$id."' ");

echo "<div class='container'>";
echo "<fieldset data-uk-margin>";
echo "<form class='uk-form'>";
foreach ($productos as $row ) {
	echo "<div>";	
	echo "<label for='des'>Descripcion</label>";
echo "</div>";

echo "<div>";
	echo "<input type='text' value='".$row["descripcion"]."' id='des'> " ;
echo "</div>";
echo "<br>";
echo "<div>";	
	echo "<label for='precom'>Precio compra</label>";
echo "</div>";
echo "<div>";
	echo "<input type='number' value='".$row["preciocompra"]."' id='precomm' >";
echo "</div>";
	echo "<div>";	
	echo "<label for='pre'>Precio venta</label>";
echo "</div>";
echo "<div>";
	echo "<input type='number' value='".$row["precio"]."' id='pre' >";
echo "</div>";
echo "<br>";
echo "<div>";	
	echo "<label for='can'>Cantidad</label>";
echo "</div>";
echo "<div>";	
	echo "<input type='number' value='".$row["cantidad"]."' id='can' name='can'>";
echo "</div>";


}
echo "</fieldset>";
echo "</form>";

echo "<button class='btn btn-primary uk-modal-close' onclick='actualizar(".$id.")' >Guardar</button>";



echo "</div>";

 ?>
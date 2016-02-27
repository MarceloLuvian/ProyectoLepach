<?php 

include ("connect.php"); 
 mysqli_query($connect,"SET NAMES 'utf8'");
$productos = mysqli_query($connect, "SELECT *FROM producto");

echo "<div class='uk-overflow-container'>";
echo "<table class='uk-table uk-table-hover uk-table-striped uk-table-condensed'>";
echo "<tr><th> Fecha </th> <th> Descripcion </th> <th> Precio </th> <th> Cantidad </th> <th> Vendidos </th> <th> Restantes </th> <th> Total Vendidos </th> <th> Acciones </th> </tr>";

foreach ($productos as $row ) {
	
	 echo "<td> ".$row["fecha"]." </td> <td>".$row["descripcion"]."</td> <td>$".$row["precio"]."</td> <td>".$row["cantidad"]."</td> <td>".$row["vendidos"]."</td> <td>".$row["restantes"]."</td> <td>$".$row["totalvendidos"]."</td> <td> <a  href='#my-id' data-uk-modal onclick='editar(".$row["id"].")'><span class='glyphicon glyphicon-pencil'></span></a> <a href='#'><span class='glyphicon glyphicon-remove'></span></a> </td> ";
    echo " </tr>\n ";

}
echo "</div>";


mysqli_close($connect);
 ?>
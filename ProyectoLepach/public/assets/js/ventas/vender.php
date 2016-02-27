<?php 
include('connect.php');

$monto = $_POST['monto'];

$total = 0;

$resultado = mysqli_num_rows(mysqli_query($connect, "SELECT *from carrito") );
$fecha = date('y-m-d');

if ($resultado == 0) {
	echo "<script language='JavaScript'> 
if(confirm('Debe seleccionar al menos un producto!')){
                     pagination(1);
                           
                      }
</script>";
}else{
   	
   	$productos = mysqli_query($connect, "SELECT precio as precio,id as id from producto inner join carrito ON carrito.id_producto = producto.id");

foreach ($productos as $row ) {
		
		$total = $row["precio"] + $total;
		mysqli_query($connect, "INSERT INTO ventas (fecha, id_producto) values ('".$fecha."', '".$row["id"]."') ");
		mysqli_query($connect, "UPDATE producto set vendidos=vendidos+1 where id= '".$row["id"]."'  ");
		mysqli_query($connect, "UPDATE producto set totalvendidos=totalvendidos+'".$row["precio"]."' where id= '".$row["id"]."'  ");

}



$cambio = $monto - $total;
echo "Su cambio es de: $".$cambio;
mysqli_query($connect, "TRUNCATE TABLE carrito");

echo "<script language='JavaScript'> 
if(confirm('Venta realizada correctamente!')){
                     pagination(1);
                           
                      }
</script>";

}

 ?>
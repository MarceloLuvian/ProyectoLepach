<?php 
include ("connect.php"); 

$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$cantidad= $_POST['cantidad'];
$preciocompra = $_POST['preciocompra'];



$fecha = date('y-m-d');
 mysqli_query($connect,"SET NAMES 'utf8'");
 $consulta = mysqli_query($connect, "INSERT INTO producto (fecha, descripcion, preciocompra,precio, cantidad, vendidos, restantes, totalvendidos) values ('".$fecha."', '".$descripcion."', '".$preciocompra."', '".$precio."', '".$cantidad."', '0', '0','0.00'  )");

if($consulta == true){
	echo "<script language='JavaScript'> 
if(confirm('Producto agregado correctamente!')){
                     pagination(1);
                     limpiar();       
                      }
</script>";
}

 ?>
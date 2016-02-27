<?php 
include ("connect.php"); 

$id = $_POST['ID'];
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$cantidad= $_POST['cantidad'];
$preciocompra = $_POST['preciocompra'];

mysqli_query($connect,"SET NAMES 'utf8'");
$resultado = mysqli_query($connect, "UPDATE producto SET descripcion= '".$descripcion."', precio = '".$precio."', preciocompra = '".$preciocompra."', cantidad = '".$cantidad."' WHERE id='".$id."' ");

if($resultado){
	echo "<script language='JavaScript'> 
if(confirm('Actualizacion completada correctamente!')){
                     pagination(1);
                           
                      }
</script>";
}else {
	echo "Error";
}

 ?>
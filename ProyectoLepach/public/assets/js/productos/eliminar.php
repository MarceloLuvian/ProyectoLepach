<?php 
include ("connect.php"); 

$id = $_POST['ID'];


$resultado =  mysqli_query($connect, "DELETE FROM PRODUCTO where id = '".$id."' ");

if ($resultado) {
	echo "<script language='JavaScript'> 
if(confirm('Producto eliminado correctamente!')){
                     pagination(1);
                           
                      }
</script>";
}else{
	echo "<script language='JavaScript'> 
if(confirm('Error al eliminar el producto!')){
                     pagination(1);
                           
                      }
</script>";
}



 ?>
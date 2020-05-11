<?php 
	include_once "conexion.php";
	//echo "UPDATE llanta SET Nombre='".$_POST['Nombre']."', Descripcion='".$_POST['Descripcion']."', Tipo='".$_POST['Tipo']."', Precio='".$_POST['Precio']."', Existencia='".$_POST['Existencia']."' WHERE (idLlanta='".$_POST['ID']."');";
	if($con->query("UPDATE llanta SET Nombre='".$_POST['Nombre']."', Descripcion='".$_POST['Descripcion']."', Tipo='".$_POST['Tipo']."', Precio='".$_POST['Precio']."', Existencia='".$_POST['Existencia']."' WHERE (idLlanta='".$_POST['ID']."');")){
		echo "<script>window.location.href='inventario.php?msg=Articulo ".$_POST['Nombre']." actualizado con exito';</script>";
	}
	else{
 		echo "<script>window.location.href='inventario.php?msg=No Fue posible actualizar el articulo ".$_POST['Nombre'].", contacte al administrador';</script>";
 	}



?>

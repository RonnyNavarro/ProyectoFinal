<?php
	include_once "conexion.php";	
	if($con->query("INSERT INTO llanta (Nombre,Descripcion,Tipo,Precio,Existencia) VALUES ('".$_POST['Nombre']."', '".$_POST['Descripcion']."', '".$_POST['Tipo']."','".$_POST['Precio']."', '".$_POST['Existencia']."');")){
		echo "<script>window.location.href='modificar.php?msg=Articulo agregado con exito, ahora coloque una imagen de articulo&imagen=1';</script>";
	}else{
		echo "<script>window.location.href='inventario.php?msg=No Fue posible agregar el articulo, contacte al administrador';</script>";
	}

?>
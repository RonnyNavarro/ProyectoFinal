<?php
	include_once "conexion.php";
	if ($_POST['estado']=='Enviar') {
		$estado = $con->query("UPDATE pedido SET Estado = 'Enviado' WHERE (idPedido = '".$_POST['id']."');");
		echo "<script>window.location.href='pedidos.php';</script>";
	}elseif ($_POST['estado']=='Confirmar Recepcion') {
		$estado = $con->query("UPDATE pedido SET Estado = 'Recibido por cliente', F_Entrega=now() WHERE (idPedido = '".$_POST['id']."');");
		echo "<script>window.location.href='pedidos.php';</script>";
	}elseif (isset($_POST['cancel'])) {
		$estado = $con->query("UPDATE pedido SET Estado = 'Cancelado' WHERE (idPedido = '".$_POST['id']."');");
		echo "<script>window.location.href='pedidos.php';</script>";
	}

	if($_POST['estado']=='Nuevo'){
		$estado = $con->query("UPDATE contacto SET status = 'Revisado', f_termino=now() WHERE (idcontacto = '".$_POST['id']."');");
		$result= $con->query("select correo, asunto from contacto where idcontacto='".$_POST['id']."'");
		$res=$result->fetch_assoc();
		echo "<script>window.location.href='mailto:".$res['correo']."?Subject=".$res['asunto']."';window.location.href='contacto.php';</script>";
	}
	
?>
<?php 
	include_once "conexion.php";
	$nombre=$_POST['name'];
	$correo=$_POST['email'];
	$asunto=$_POST['subject'];
	$msg=$_POST['msg'];
	$result = $con->query("INSERT INTO contacto (nombre, correo, asunto, mensaje, f_creacion) VALUES ('".$nombre."', '".$correo."', '".$asunto."', '".$msg."',now());");
	echo "<script>window.location.href='contacto.php?s=success';</script>"
?>
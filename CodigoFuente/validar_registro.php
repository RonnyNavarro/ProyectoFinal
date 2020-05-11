<?php 
// datos para la coneccion a mysql 

include_once "conexion.php";
$username=$_POST['username'];
$password=$_POST['password'];
$password_check=$_POST['confirm'];
if($password==$password_check){
	$email=$_POST['email'];
	$name=$_POST['name'];
	$result = $con->query("INSERT INTO usuario (idUsuario, Nombre, Correo, Password) VALUES ('".$username."', '".$name."','".$email."','".$password."');");
	echo "<script>window.location.href='index.php';alert('Cuenta creada exitosamente');</script>";
}else{
	echo "<script>window.location.href='registro.php';alert('La Confirmación de contraseña no coinciden');</script>";
}

?> 
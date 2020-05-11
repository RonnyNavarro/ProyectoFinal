<?php 
// datos para la coneccion a mysql 
ob_start();
include_once "conexion.php";
$user=$_POST['user'];
$Password=$_POST['pass'];
$result = $con->query("Select Password,Tipo from usuario where idUsuario='".$user."'");
if($res=$result->fetch_array(MYSQLI_ASSOC)){
	if ($res['Password']==$Password) {
		setcookie('user',$user);
		setcookie('rango',$res['Tipo']);	
		echo "<script>window.location.href='index.php?m=success';</script>";
	}else{
		echo "<script>window.location.href='login.php?m=error';</script>";
}

}else{
		echo "<script>window.location.href='login.php?m=error';</script>";
}



?> 
<?php
include_once "conexion.php";
$dir = "img/catalogo/";
$archivo_server = $dir . basename($_FILES["imagen_carga"]["name"]);
$validar_upload = 1;
$imageFileType = strtolower(pathinfo($archivo_server,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagen_carga"]["tmp_name"]);
  if($check !== false) {
    $validar_upload = 1;
  } else {
    echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Solo JPG, JPEG, GIF y PNG son admitidos';</script>";
    $validar_upload = 0;
  }
}

if (file_exists($archivo_server)) {
  echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Error la imagen ya existe';</script>";
  $validar_upload = 0;
}

if ($_FILES["imagen_carga"]["size"] > 500000) {
  echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Lo lamento es demasiado pesada para subirla';</script>";
  $validar_upload = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Solo JPG, JPEG, GIF y PNG son admitidos';</script>";
  $validar_upload = 0;
}

if ($validar_upload == 0) {
  echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Error tu imagen no ha podido ser cargada.';</script>";
} else {
  if (move_uploaded_file($_FILES["imagen_carga"]["tmp_name"], $archivo_server)) {
    $result = $con->query("UPDATE llanta SET img = '".$archivo_server."' where idLlanta='".$_POST['ID']."'");
    echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=La imagen ". basename( $_FILES["imagen_carga"]["name"]). " Ha sido cargada satisfactoriamente.';</script>";
  } else {
    echo "<script type=\"text/javascript\">window.location.href='inventario.php?msg=Ha ocurrido un error al cargar tu imagen.';</script>";
  }
}
?>

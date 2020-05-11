<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<title>Llantas Chiapas</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/util.js"></script>
		<script src="js/jquery-3.4.1.js"></script>
		<script src="js/sweetalert.min.js"></script>
	</HEAD>
	<style>
	  	
	  	.navbar-custom { 
	  		text-align: right;
      		background-color:#2B94BE ; 
      		border-style: solid;
      	}
      	.navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text .nav-item .navbar-nav { 
            color: white; 
        }
        .container, .BODY{
        	background-color:white ;
        }
        .table > tbody > tr > td{
        	text-align:center; 
        	vertical-align:middle;
        }
		
  	</style>
	<BODY style="background-color:white;">

		<div class="jumbotron text-center"style="margin-bottom:0;background-color:#2B94BE; color: white">
			<div class="row">
				<div class="col-sm">
					<img src="img/logo_llanta.png" ></img>
					<h4>LLANTASCHIAPAS.COM</h4>
				</div>
				<div class="col-sm">
					<h1 style="color: white">¡ESCOGE LA LLANTA ADECUADA PARA TU AUTOMOVIL!</h1>
				</div>
				<div class="col-sm">
					
					<div class="row">
						
						<<div class="col-sm" style="margin-top: auto; margin-bottom: auto;">
							<?php 
						      if (!isset($_COOKIE["user"]))  {
						      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='login.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Iniciar Sesión</button>";
						      }else{
						      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='logout.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Cerrar Sesión</button>";
						      }
					      	
					      ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm"><img src="img/derrape.png" width="235px" height="214px"></img></div>
						<div class="col-sm" style="margin-top: auto; margin-bottom: auto;"><h3>2da Oriente entre 4ta. y 5ta Sur Terán.<br>Tel. 965-117-0759</h3></div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<?php include_once "nav_bar.php" ?>
		
		<div class="container text-center" style="margin-top:0px; ">
			<H2>Panel de edicion de tu inventario</H2>
		</div>
		<div class="container">
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Descripción</td>
						<td>Tipo</td>
						<td>Precio</td>
						<td>Existencia</td>
						<td>Imagen</td>
						<td>Acciones</td>
					</tr>
					<?php 
						// datos para la coneccion a mysql 
						 include_once "conexion.php";
						 $result= $con->query("select * from llanta where 1");

						 while ($res=$result->fetch_assoc()) {
						 	
						 	echo "<tr>
									<td >".$res['idLlanta']."</td>
									<td >".$res['Nombre']."</td>
									<td >".$res['Descripcion']."</td>
									<td >".$res['Tipo']."</td>
									<td >".$res['Precio']."</td>
									<td >".$res['Existencia']."</td>
									<td ><img src='".$res['img']."' width='100px' height='100px' /></td>
									<td >
										<form action='modificar.php' method='POST'>
											<input type='number' name='ID' value='".$res['idLlanta']."' style='display:none;'/>
											<input type='submit' style=\"background:url('img/iconos/edit.png') center center; background-size:contain; width:50px;height:50px;\" value='' name='editar'/>
										</form>
										<form action='modificar.php' id='b".$res['idLlanta']."' method='POST'>
											<input type='text' name='ID' value='".$res['idLlanta']."' style='display:none;'/>
											<input type='text' name='borrar' value='".$res['idLlanta']."' style='display:none;'/>
										</form>
										<input type='button' onclick='alerta_borrado(b".$res['idLlanta'].");' style=\"background:url('img/iconos/del.png') center center; background-size:contain; width:50px;height:50px;\" value='' name='borrar'/>
										<form action='modificar.php' method='POST'>
											<input type='number' name='ID' value='".$res['idLlanta']."' style='display:none;'/>
											<input type='submit'  style=\"background:url('img/iconos/img.png') center center; background-size:contain; width:50px;height:50px;\" value='' name='imagen'/>
										</form>
									</td>
								</tr>";
						 }
					?>
					<tr>
						<td colspan="8"><div class="container text-center"><h3>Añadir nuevo producto</h3><br><input type="submit" class='btn btn-default btn-lg' value='' style="background:url('img/iconos/add.png') center center; background-size:contain; width:150px;height:150px;" onclick="window.location.href='modificar.php?crear=1'" name="crear"></div></td>
					</tr>
				</tbody>
			</table>
			
		</div>
		</div>
		<script type="text/javascript">
			function alerta_borrado(id){
				swal({
				    title: "¿Esta usted seguro de eliminarlo?",
				    text: "No sera posible recuperar este articulo",
				    type: "warning",
				    buttons: [
				        'No, cancelar!',
				        'Si, estoy seguro!'
				      ],
			      	dangerMode: true
				 }).then(function(isConfirm){
				 	if(isConfirm){
				 		$(id).submit();
				 	}
				});
			}
			
		</script>
		<script type="text/javascript">
		link = window.location.href;
		var url = new URL(link);
		var urlParams = new URLSearchParams(url.search);
		var status = urlParams.getAll('msg');
		if (status!="") {
		swal({
            title: "",
            text: status,
            type: "Success" 
        });
        }
		

	</script>
		<div class="jumbotron text-right" style="margin-bottom:0; background-color: gray">

			<?php 
					if (!isset($_COOKIE["user"])||!isset($_COOKIE["rango"]) || $_COOKIE["rango"]!=0) {
			      	     	echo "<script>
					        swal({
					            title: \"Ups!\",
					            text: \"Debes ser administrador para ver esta pagina\",
					            type: \"warning\" 
					        }).then(function() {
					            window.location.href = 'login.php';
					        });</script>";	

					}	   
			      if (!isset($_COOKIE["user"]))  {
			      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='login.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Iniciar Sesión</button>";
			      }else{
			      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='logout.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Cerrar Sesión</button>";
			      }
		      	
		      ?>
  			
		</div>
	</BODY>
</HTML>
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
						
						<div class="col-sm" style="margin-top: auto; margin-bottom: auto;"><button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='registrar.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Iniciar Sesión</button></div>
					</div>
					<div class="row">
						<div class="col-sm"><img src="img/derrape.png" width="235px" height="214px"></img></div>
						<div class="col-sm" style="margin-top: auto; margin-bottom: auto;"><h3>2da Oriente entre 4ta. y 5ta Sur Terán.<br>Tel. 965-117-0759</h3></div>
					</div>
					
					
				</div>
			</div>
		</div>		
		<?php include_once "nav_bar.php" ?>
		</nav>
		<div class="container" style="margin-top:0px">
		 
		</div>
		<div class="container text-center" style="margin-top:0px;color:#2B94BE ">
			<H2>¡¡LAS MEJORES LLANTAS DE CHIAPAS!!</H2>
		</div>
		<div class="table-responsive text-center">
			<h3>Resumen de tus ventas:</h3>
			<div class="row">
				
				<div class="col-sm">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
								<td>Producto Comprado</td>
								<td>Usuario</td>
								<td>Cantidad</td>
								<td>Precio</td>
								<td>Dirección de entrega</td>
								<td>Estado</td>
								<td>Cambio de Estado</td>
								<td>Cancelar Orden</td>
							</tr>

							<?php 
								// datos para la coneccion a mysql 
								 include_once "conexion.php";
								 $result= $con->query("select pedido.*, llanta.Nombre, llanta.img, llanta.precio as p_unitario from pedido JOIN llanta on pedido.idLlanta= llanta.idLlanta where 1");
								 while ($res=$result->fetch_assoc()) {
								 	echo "<tr>
								 			<td><img src='".$res['img']."' width='120px' height='120px'/></td>
											<td>".$res['Nombre']."</td>
											<td>".$res['idUsuario']."</td>
											<td>".$res['Cantidad']." unidades</td>
											<td id=\"PTotal\">$".$res['Precio']." MXN</td>
											<td>";
									$direccion= $con->query("select * from direccion where idDireccion=".$res['idDireccion'].";");
								 	$dir_sel = $direccion->fetch_assoc();
								 	echo "<div class=\"form-group\">
	                                        <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
	                                        Calle: ".$dir_sel['Calle']."</br>No Exterior - No Interior: ".$dir_sel['NoExterior']." - ".$dir_sel['NoInterior']."</br>Colonia: ".$dir_sel['Colonia']."</br>CP: ".$dir_sel['Codigo_Postal']."</br>
	                                        <input type=\"text\" style=\"display:none\" name=\"dir\" value=\"".$dir_sel['idDireccion']."\"/>
		                                </div>";
									echo	"</td>";
									echo "<td>".$res['Estado']."</td>";
									if ($res['Estado']=="Preparando Pedido") {
										echo "<td><form action=\"estado.php\" method='POST'><input type='text' name='id' value='".$res['idPedido']."' style='display:none' required><input type='text' name='estado' value='Enviar' style='display:none' required><input type=\"submit\"  value=\"Enviar\"class='btn btn-default btn-lg' style='background-color:#65BADC'></form></td>";
										echo "<td><form action=\"estado.php\" method='POST'><input type='text' name='id' value='".$res['idPedido']."' style='display:none' required><input type='text' name='cancel' value='Cancelar' style='display:none' required><input type=\"submit\" value=\"Cancelar Compra\"class='btn btn-default btn-lg' style='background-color:#65BADC'></form></td>";
									}elseif ($res['Estado']=="Enviado") {
										echo "<td><form action=\"estado.php\" method='POST'><input type='text' name='id' value='".$res['idPedido']."' style='display:none' required><input type='text' name='estado' value='Confirmar Recepcion' style='display:none' required><input type=\"submit\" name=\"estado\" value=\"Confirmar Recepcion\"class='btn btn-default btn-lg' style='background-color:#65BADC'></form></td>";
										echo "<td>No es posible cancelar</td>";
									}elseif ($res['Estado']=="Entregado") {
										echo "<td>Ha sido entregado</td>";
										echo "<td>No es posible cancelar</td>";
									}
									
									
										echo "</tr>";
								 }

							?>
						</tbody>
					</table>
					
					<script type="text/javascript">
					  		swal("Aqui podrás administrar todos los pedidos que te llegen.");
					  		
  					</script>
				</div>
				
			</div>
			
			<p style="color: black">*** Solo puedes cancelar el pedido antes de que sea enviado.</p>
		</div>
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
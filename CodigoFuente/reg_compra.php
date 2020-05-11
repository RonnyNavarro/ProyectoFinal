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
						<div class="col-sm"><img src="img/derrape.png" width="235px" height="214px"></img></div>
						<div class="col-sm" style="margin-top: auto; margin-bottom: auto;"><h3>2da Oriente entre 4ta. y 5ta Sur Terán.<br>Tel. 965-117-0759</h3></div>
					</div>
					
					
				</div>
			</div>
		</div>
		<?php include_once "nav_bar.php" ?>
		<div class="container" style="margin-top:0px">
		 
		</div>
		<div class="container text-center" style="margin-top:0px;color:#2B94BE ">
			<H2>¡¡LAS MEJORES LLANTAS DE CHIAPAS!!</H2>
		</div>
		<div class="table-responsive text-center">
			<h3>Resumen de lo que compraste:</h3>
			<div class="row">
				<div class="col-sm"></div>
				<div class="col-sm">
					<table class="table">
						<tbody>
							<tr>
								<td></td>
								<td>Nombre</td>
								<td>Descripción</td>
								<td>Tipo</td>
								<td>Precio Unitario</td>
								<td>Cantidad</td>
								<td>Precio Total</td>
								<td></td>
							</tr>

							<?php 
								// datos para la coneccion a mysql 
								 include_once "conexion.php";

								 $insert_pedido = $con->query("INSERT INTO pedido (idUsuario,idLlanta,Precio,Cantidad,F_Pedido,idDireccion) VALUES ('".$_COOKIE['user']."','".$_POST['ID']."',((select Precio from llanta where idLlanta=".$_POST['ID'].")*".$_POST['cantidad']."),'".$_POST['cantidad']."',now(),'".$_POST['dir']."');");
								 $update_existencia = $con->query("update llanta set Existencia = (Existencia-".$_POST['cantidad'].") where idLlanta=".$_POST['ID'].";");
								 $result= $con->query("select * from llanta where idLlanta=".$_POST['ID']);
								 while ($res=$result->fetch_assoc()) {
								 	echo "<tr>
								 			<td><img src='".$res['img']."' width='120px' height='120px'/></td>
											<td>".$res['Nombre']."</td>
											<td>".$res['Descripcion']."</td>
											<td>".$res['Tipo']."</td>
											<td>$".($res['Precio'])." MXN <input type=\"number\" id=\"precio\" style='display:none' value=\"".$res['Precio']."\" required></td>
											<td>".$_POST['cantidad']." unidades</td>
											<td id=\"PTotal\">$".($res['Precio']*$_POST['cantidad'])." MXN</td>
											<td>
											</tr>";
								 }

							?>
						</tbody>
					</table>
					<?php 
						$direccion= $con->query("select * from direccion where idDireccion=".$_POST['dir'].";");
							 	$dir_sel = $direccion->fetch_assoc();
							 	echo "<div class=\"card-header\">Se enviará a la direccion:</div>
							 			<div class=\"card-body\">";
					 			echo "
					 				<div class=\"form-group\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                                        </br>Calle: ".$dir_sel['Calle']."</br>No Exterior - No Interior: ".$dir_sel['NoExterior']." - ".$dir_sel['NoInterior']."</br>Colonia: ".$dir_sel['Colonia']."</br>CP: ".$dir_sel['Codigo_Postal']."</br>
                                        <input type=\"text\" style=\"display:none\" name=\"dir\" value=\"".$dir_sel['idDireccion']."\"/>
                                        <input type=\"number\" id=\"cant\" name=\"cantidad\" style='display:none' value=\"".$_POST['cantidad']."\" required> 
                                        <input type=\"number\" name=\"ID\" style='display:none' value=\"".$_POST['ID']."\" required>
                                       
	                                </div></div>";

					?>
					<script type="text/javascript">
					  		swal("Gracias por tu compra!!");
					  		
  					</script>
				</div>
				<div class="col-sm"></div>
			</div>
			
			<p style="color: black">*** Los Rines usados en las imagenes son de caracter descriptivo y no se incluyen en la compra de la llanta.</p>
		</div>
		<div class="jumbotron text-right" style="margin-bottom:0; background-color: gray">

			<?php 
			      if (!isset($_COOKIE["user"]))  {			      		
			      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='login.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Iniciar Sesión</button>";
			      }else{
			      	echo "<button type='button' class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='logout.php'\"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Cerrar Sesión</button>";
			      }
		      	
		      ?>
  			
		</div>
	</BODY>
</HTML>
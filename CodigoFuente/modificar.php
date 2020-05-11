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
						
						<div class="col-sm" style="margin-top: auto; margin-bottom: auto;">
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
		<div class="container">
				<?php 
						// datos para la coneccion a mysql 
						 include_once "conexion.php";
						 
						 if (isset($_POST['editar'])) {
						 	$result= $con->query("select * from llanta where idLlanta='".$_POST['ID']."'");
						 	while ($res=$result->fetch_assoc()) {
							 	echo "<h2>Actualizar articulo ".$_POST['ID'].".- ".$res['Nombre']."</h2>
							 	<form action='update_inventario.php' method='POST' id='inventario'>
							 			<div class='container text-center'>
										<img id='Img' name='Img' src='".$res['img']."' width='200px' height='200px'/>
										</div>
							 			<div class=\"form-group\">
							 			<label for='Nombre'>Nombre del producto:</label>	 			
										<input class='form-control' type='text' id='Nombre' name='Nombre' value='".$res['Nombre']."' required form=\"inventario\" />
										<label>Descripción:</label>	
										<textarea class='form-control' form='inventario' id='Descripcion' name='Descripcion' cols='40' rows='5'  required form=\"inventario\" >".$res['Descripcion']."</textarea>
										<label for='Tipo' class='form-group'>Tipo de llanta:</label>";
								if ($res['Tipo']=="H/L") {
									echo "<select class='form-control' id='Tipo' name='Tipo' form='inventario' form=\"inventario\">
										  <option value='H/L' selected>H/L</option>
										  <option value='A/T'>A/T</option>
										  <option value='M/T'>M/T</option>
										</select>";
								}elseif ($res['Tipo']=="A/T") {
									echo "<select class='form-control' id='Tipo' name='Tipo' form='inventario' form=\"inventario\">
										  <option value='H/L'>H/L</option>
										  <option value='A/T' selected>A/T</option>
										  <option value='M/T'>M/T</option>
										</select>";
								}else{
									echo "<select class='form-control' id='Tipo' name='Tipo' form='inventario' form=\"inventario\">
										  <option value='H/L'>H/L</option>
										  <option value='A/T'>A/T</option>
										  <option value='M/T' selected>M/T</option>
										</select>";
								}
								echo "<label for='Precio'>Precio del producto:</label>	
										<input class='form-control' type='text' id='Precio' name='Precio' value='".$res['Precio']."' required form=\"inventario\" />
										<label for='Existencia'>Existencia:</label>
										<input class='form-control' type='text' id='Existencia'  name='Existencia' value='".$res['Existencia']."' required form=\"inventario\" />
										<input type='number' name='ID' value='".$res['idLlanta']."' style='display:none;'/>
										</div>
										</form>
										<input type=\"button\" value=\"Actualizar\" class=\"form-control\" onclick=\"alerta_update(inventario,'".$res['Nombre']."');\" style=\"background-color:#65BADC\" />
										<br><br>** Nota Si coloca existencia 0 el producto se deshabilitara del catalogo automaticamente.";
							 }
					 	}
					 	if (isset($_GET['crear'])) {
					 	 	echo "<h2>Creación de articulo nuevo al inventario</h2>
						 	<form action='add_inventario.php' method='POST' id='crear'>
						 			<div class='container text-center'>
									<img id='Img' name='Img' src='' width='200px' height='200px'/>
									</div>
						 			<div class=\"form-group\">
						 			<label for='Nombre'>Nombre del producto:</label>	 			
									<input class='form-control' type='text' id='Nombre' name='Nombre' value='' required form=\"crear\" />
									<label>Descripción:</label>	
									<textarea class='form-control' form='crear' id='Descripcion' name='Descripcion' cols='40' rows='5'  required form=\"crear\" ></textarea>
									<label for='Tipo' class='form-group'>Tipo de llanta:</label>";
								echo "<select class='form-control' id='Tipo' name='Tipo' form=\"crear\">
									  <option value='H/L' selected>H/L</option>
									  <option value='A/T'>A/T</option>
									  <option value='M/T'>M/T</option>
									</select>";
							echo "<label for='Precio'>Precio del producto:</label>	
									<input class='form-control' type='number' id='Precio' name='Precio' value='' required form=\"crear\" />
									<label for='Existencia'>Existencia:</label>
									<input class='form-control' type='number' id='Existencia'  name='Existencia' value='' required form=\"crear\" />
									</div>
									</form>
									<input type=\"button\" value=\"Añadir al inventario\" class=\"form-control\" onclick=\"alerta_crear(crear);\" style=\"background-color:#65BADC\" />
									<br><br>** Nota Si coloca existencia 0 el producto se creará deshabilitado automaticamente.";
							
						 	
					 	}
					 	if (isset($_POST['borrar'])) {
						 	if($con->query("DELETE FROM llanta WHERE idLlanta='".$_POST['ID']."';")){
						 		echo "<script>window.location.href='inventario.php?msg=Articulo eliminado con exito';</script>";
						 	}else{
						 		echo "<script>window.location.href='inventario.php?msg=No Fue posible eliminar el articulo, contacte al administrador';</script>";
						 	}
						 	
						 	
					 	}
					 	if (isset($_POST['imagen'])) {
					 		$result= $con->query("select * from llanta where idLlanta='".$_POST['ID']."'");
						 	while ($res=$result->fetch_assoc()) {
						 		echo "<h2>Cargar Imagen en el articulo ".$_POST['ID'].".- ".$res['Nombre']."</h2>";
							 	echo "<form action='cargar_imagen.php' method='POST' enctype=\"multipart/form-data\">
							 		  <div class=\"form-group\">
							 		  <input type='number' name='ID' value='".$res['idLlanta']."' style='display:none;'/>					 			
									  <input class='form-control' type=\"file\" name=\"imagen_carga\" id=\"imagen_carga\" required/>
									  </div>
  									  <input class='form-control' style='background-color:#65BADC' type=\"submit\" value=\"Cargar Imagen\" name=\"submit\"/>
									  </form>";
							 }
					 	}
					 	if (isset($_GET['imagen'])) {
					 		$result=$con->query("SELECT * from llanta where (1) order by idLlanta desc limit 1;");
							while ($res=$result->fetch_assoc()) {
						 		echo "<h2>Cargar Imagen en el articulo ".$res['idLlanta'].".- ".$res['Nombre']."</h2>";
							 	echo "<form action='cargar_imagen.php' method='POST' enctype=\"multipart/form-data\">
							 		  <div class=\"form-group\">
							 		  <input type='number' name='ID' value='".$res['idLlanta']."' style='display:none;'/>					 			
									  <input class='form-control' type=\"file\" name=\"imagen_carga\" id=\"imagen_carga\" required/>
									  </div>
  									  <input class='form-control' style='background-color:#65BADC' type=\"submit\" value=\"Cargar Imagen\" name=\"submit\"/>
									  </form>";
							 }
					 	}

					?>
		</div>
		<script type="text/javascript">
			function alerta_update(id,articulo){
				art= "Actualización del artículo: " + articulo;
				swal({
				    title: art,
				    text: "¿Esta usted seguro de continuar?",
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
			function alerta_crear(id){
				swal({
				    title: "Usted esta a punto de crear un articulo",
				    text: "¿Esta usted seguro de continuar?",
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
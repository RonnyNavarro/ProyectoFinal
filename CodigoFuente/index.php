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
		<div class="container" style="margin-top:0px">
		  <div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators" >
			    <li data-target="#demo" data-slide-to="0" class="active" style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="1"style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="2"style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="3"style="background-color: blue"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/pngocean.com.png" alt="Llantas" width="1100" height="500">
			    </div>
			 	<div class="carousel-item">
			      <img src="img/llantas_main.jpg" alt="Chiapas img" width="1100" height="500">
			    </div>
			    <div class="carousel-item">
			      <img src="img/LlantasTodoTerreno_big.jpg" alt="Chiapas img" width="1100" height="500">
			    </div>
			    <div class="carousel-item">
			      <img src="img/leer-diagrama.jpg" alt="Chiapas img" width="1100" height="500">
			    </div>
			    
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
		<div class="container text-center" style="margin-top:0px;color:#2B94BE ">
			<H2>¡¡LAS MEJORES LLANTAS DE CHIAPAS!!</H2>


		</div>
		<div class="table-responsive text-center">
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
					</tr>
					<?php 
						// datos para la coneccion a mysql 
						 include_once "conexion.php";
						 $result= $con->query("select * from llanta where 1");

						 while ($res=$result->fetch_assoc()) {
						 	# code...
						 	echo "<tr>
									<td>".$res['idLlanta']."</td>
									<td>".$res['Nombre']."</td>
									<td>".$res['Descripcion']."</td>
									<td>".$res['Tipo']."</td>
									<td>".$res['Precio']."</td>
									<td>".$res['Existencia']."</td>
									<td><img src='".$res['img']."' width='50px' height='50px' /></td>
								</tr>";
						 }
					?>
				</tbody>
			</table>
			
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
	<script type="text/javascript">
		link = window.location.href;
		var url = new URL(link);
		var urlParams = new URLSearchParams(url.search);
		var status = urlParams.getAll('m');
		if(status == 'success'){
			swal({
	            title: "Excelente!",
	            text: "Inicio de sesion exitoso!",
	            type: "Success" 
	        });
		}else{
			if(status == "error"){
			swal({
	            title: "Ups!",
	            text: "Hubo un error al enviar el mensaje contacta con el administrador del sitio!",
	            type: "Error" 
	        }).then(function() {
	            window.location.href = 'login.php';
	        });
	    	}
		}
		

	</script>
</HTML>
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
		<!--<div class="container" style="margin-top:0px">
		  <div id="demo" class="carousel slide" data-ride="carousel">

			   Indicators 
			  <ul class="carousel-indicators" >
			    <li data-target="#demo" data-slide-to="0" class="active" style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="1"style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="2"style="background-color: blue"></li>
			    <li data-target="#demo" data-slide-to="3"style="background-color: blue"></li>
			  </ul>
			  
			   The slideshow
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
			  
			   Left and right controls 
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>-->
		<div class="d-flex justify-content-center text-center" style="margin-top:0px; ">

		<?php if(!isset($_COOKIE['user']) || (isset($_COOKIE['rango']) && $_COOKIE['rango']==1)){?>
		
		<!--Section: Contact v.2-->
			<section class="mb-4">

			    <!--Section heading-->
			    <h2 class="h1-responsive font-weight-bold text-center my-4">¡¡Envianos tus dudas!!</h2>
			    <!--Section description-->
			    <p class="text-center w-responsive mx-auto mb-5">Tienes algúna pregunta, no dudes en contactarnos, porfavor llena el formulario a continuación y con gusto te ayudaremos.</p>

			    <div class="row">

			        <!--Grid column-->
			        <div class="col-md-9 mb-md-0 mb-5">
			            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

			                <!--Grid row-->
			                <div class="row">

			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form mb-0">
			                            <input type="text" id="name" name="name" class="form-control" required>
			                            <label for="name" class="">Nombre completo</label>
			                        </div>
			                    </div>
			                    <!--Grid column-->

			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form mb-0">
			                            <input type="text" id="email" name="email" class="form-control" required>
			                            <label for="email" class="">Correo para contactarle</label>
			                        </div>
			                    </div>
			                    <!--Grid column-->

			                </div>
			                <!--Grid row-->

			                <!--Grid row-->
			                <div class="row">
			                    <div class="col-md-12">
			                        <div class="md-form mb-0">
			                            <input type="text" id="subject" name="subject" class="form-control" required>
			                            <label for="subject" class="">Asunto</label>
			                        </div>
			                    </div>
			                </div>
			                <!--Grid row-->

			                <!--Grid row-->
			                <div class="row">

			                    <!--Grid column-->
			                    <div class="col-md-12">

			                        <div class="md-form">
			                            <textarea type="text" id="message" name="msg" rows="2" class="form-control md-textarea" required></textarea>
			                            <label for="message">Su Mensaje</label>
			                        </div>

			                    </div>
			                </div>
			                <!--Grid row-->

			            

			            <div class="text-center text-md-left">
			                <input type="submit" class="btn btn-primary"  value="Enviar"/>
			            </div>
			            </form>
			            <div class="status"></div>
			        </div>
			        <!--Grid column-->

			        <!--Grid column-->
			        <div class="col-md-3 text-center">
			            <ul class="list-unstyled mb-0">
			                <li><i class="fas fa-map-marker-alt fa-2x"></i>
			                    <p>2da Oriente entre 4ta. y 5ta Sur Terán.</p>
			                </li>

			                <li><i class="fas fa-phone mt-4 fa-2x"></i>
			                    <p>Tel. 965-117-0759</p>
			                </li>

			                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
			                    <p>contacto@llantaschiapas.com</p>
			                </li>
			            </ul>
			        </div>
			        <!--Grid column-->

			    </div>

			</section>
			<!--Section: Contact v.2-->
		</div>

		<?php }else{?>
		<div class="table-responsive text-center">
			<h3>Historial de mensajes de los clientes:</h3>
			<div class="row">
				
				<div class="col-sm">
					<table class="table">
						<tbody>
							<tr>
								<td>ID</td>
								<td>Fecha de creación</td>
								<td>Fecha de respuesta</td>
								<td>Persona que contacta</td>
								<td>Correo de contacto</td>
								<td>Asunto del mensaje</td>
								<td>Mensaje</td>
								<td>Estado</td>
								<td>Acción</td>
							</tr>

							<?php 
								// datos para la coneccion a mysql 
								 include_once "conexion.php";
								 $result= $con->query("select * from contacto where 1");
								 while ($res=$result->fetch_assoc()) {
								 	echo "<tr>
								 			<td>".$res['idcontacto']."</td>
								 			<td>".$res['f_creacion']."</td>
								 			<td>".$res['f_termino']."</td>
											<td>".$res['nombre']."</td>
											<td>".$res['correo']."</td>
											<td>".$res['asunto']."</td>
											<td>".$res['mensaje']."</td>";
									if ($res['status']=="Nuevo") {
										echo "<td>".$res['status']."</td>
											<td><form action=\"estado.php\" method='POST'><input type='text' name='id' value='".$res['idcontacto']."' style='display:none' required><input type='text' name='estado' value='Nuevo' style='display:none' required><input type=\"submit\" value='Responder' class='btn btn-default btn-lg' style='background-color:#65BADC'></form></td>";
									}elseif ($res['status']=="Revisado") {
										echo "<td><img src=\"img/iconos/chk.png\" width=\"90px\" height=\"70px\"/><br>".$res['status']."</td>
											<td><input type=\"submit\" name=\"estado\" value=\"Volver a responder\"class='btn btn-default btn-lg' style='background-color:#65BADC' onclick=\"window.location.href='mailto:".$res['correo']."?Subject=".$res['asunto']."'\"></td>";
									}
									
									
										echo "</tr>";
								 }

							?>
						</tbody>
					</table>
					
					<script type="text/javascript">
					  		swal("Aqui podrás administrar todos los mensajes que te llegen.");
					  		
  					</script>
				</div>
				
			</div>
			
			<p style="color: black"></p>
		</div>
		</div>

	<?php }?>
	<script type="text/javascript">
		link = window.location.href;
		var url = new URL(link);
		var urlParams = new URLSearchParams(url.search);
		var status = urlParams.getAll('s');
		if(status == 'success'){
			swal({
	            title: "Excelente!",
	            text: "Tu mensaje ha sido enviado de manera exitosa!",
	            type: "Success" 
	        }).then(function() {
	            window.location.href = 'index.php';
	        });
		}else{
			if(status == "Error"){
			swal({
	            title: "Ups!",
	            text: "Hubo un error al enviar el mensaje contacta con el administrador del sitio!",
	            type: "Error" 
	        }).then(function() {
	            window.location.href = 'contacto.php';
	        });
	    	}
		}
		

	</script>
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

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
		<div class="div-center container" style="margin-top:30px">
			<h3>Iniciar Sesión</h3>
		      <hr />
		      <form action="validar.php" method="POST">
		        <div class="form-group">
		          <label for="exampleInputEmail1">Usuario</label>
		          <input type="text" class="form-control" id="exampleInputUser1" placeholder="Nombre de usuario" name="user">
		        </div>
		        <div class="form-group">
		          <label for="exampleInputPassword1">Contraseña</label>
		          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
		        </div>
		        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
		        <hr />
		      </form>
		      <button type="button" class="btn btn-link" onclick="window.location.href='registrar.php'">Registrate</button>
		      <button type="button" class="btn btn-link" onclick="window.location.href='recuperar.php'">¿Olvidaste tu contraseña?</button>
		</div>
		<div class="jumbotron text-right" style="margin-bottom:0; background-color: gray">
  			
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
	            title: "Ups tenemos un problema:",
	            text: "Los datos de inicio de sesion son incorrectos, intente nuevamente!",
	            type: "Error" 
	        });
	    	}
		}
		

	</script>
</HTML> 
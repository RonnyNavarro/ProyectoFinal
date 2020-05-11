<?php 
ob_end_flush();
setcookie("user", "", time() - 3600);
setcookie("rango", "", time() - 3600);
?> 

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
	  	.fakeimg {
	    	height: 300px;
	    	background: #aaa;
	  	}
	  	.navbar-custom { 
	  		text-align: right;
      		background-color:#2B94BE ; 
      		border-style: solid;
      	}
      	.navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text .nav-item .navbar-nav { 
            color: white; 
        }
        
		
  	</style>
	<BODY class="body">
		
	</BODY>
	<script type="text/javascript">
		
			swal({
	            title: "Excelente!",
	            text: "Cerro sesion correctamente!",
	            type: "Success" 
	        }).then(function() {
	            window.location.href = 'login.php';
	        });
		

	</script>
</head>
</html>
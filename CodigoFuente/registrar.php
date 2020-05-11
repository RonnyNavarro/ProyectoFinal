<?php 
// datos para la coneccion a mysql 

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
		<div class="container">
		<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Registrate</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="validar_registro.php" method="post" oninput='confirm.setCustomValidity(confirm.value != password.value ? "Las Contraseñas no coinciden" : "")'>

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Nombre Completo</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese Nombre Completo" required="true"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Correo</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@correo.com" required="true"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Nombre de usuario</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario Max 40 caracteres" required="true" maxlength="40" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Contraseña</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese contraseña Max 16 caracteres" required="true" maxlength="16" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirmar Contraseña</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirmar contraseña" required="true" maxlength="16" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Registrarse</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="login.php">Iniciar Sesión</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
		</div>
		<div class="jumbotron text-right" style="margin-bottom:0; background-color: gray">
  			
		</div>
	</BODY>
</HTML> 
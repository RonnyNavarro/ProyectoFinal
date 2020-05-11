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
		<div class="container">
		<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            
                            <?php 
								// datos para la coneccion a mysql 
								 include_once "conexion.php";
								 $result= $con->query("select count(*) as dirs from direccion where idUsuario='".$_COOKIE['user']."';");
								 
								 	$res=$result->fetch_assoc();
								 	if ($res['dirs']>0) {
								 		# code...
								 		echo "<div class=\"card-header\">Usted tiene las siguientes direcciones</div>
								 			<div class=\"card-body\">";
								 		$result2 =  $con->query("select * from direccion where idUsuario='".$_COOKIE['user']."';");
								 		$cnt=1;
								 		while ($resDirs=$result2->fetch_assoc()) {
								 			echo "<form action=\"pagar.php\" method=\"POST\">
								 				<div class=\"form-group\">
				                                        <label for=\"name\" class=\"cols-sm-2 control-label\">Dirección No ".$cnt."</label>
			                                            <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
			                                            </br>Calle: ".$resDirs['Calle']."</br>No Exterior - No Interior: ".$resDirs['NoExterior']." - ".$resDirs['NoInterior']."</br>Colonia: ".$resDirs['Colonia']."</br>CP: ".$resDirs['Codigo_Postal']."</br>
			                                            <input type=\"text\" style=\"display:none\" name=\"dir\" value=\"".$resDirs['idDireccion']."\"/>
			                                            <input type=\"number\" id=\"cant\" name=\"cantidad\" style='display:none' value=\"".$_POST['cantidad']."\" required> 
			                                            <input type=\"number\" name=\"ID\" style='display:none' value=\"".$_POST['ID']."\" required>
			                                            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\">Seleccionar y Continuar</button>
				                                    </div></form>";
				                                    $cnt++;
								 		}
								 		echo "<div class=\"form-group \" id=\"agregar\">
				                                        <button type=\"button\" class=\"btn btn-primary btn-lg btn-block login-button\" onclick=\"$('#addDir').show();$('#agregar').hide();\">Agregar</button>
				                                    </div>
				        					<form class=\"form-horizontal\" id=\"addDir\"method=\"post\" action=\"pagar.php\" style='display:none' >
				        							<input type=\"number\" id=\"cant\" name=\"cantidad\" style='display:none' value=\"".$_POST['cantidad']."\" required> 
				                                    <input type=\"number\" name=\"ID\" style='display:none' value=\"".$_POST['ID']."\" required>
				                                    <div class=\"form-group\">
				                                        <label for=\"name\" class=\"cols-sm-2 control-label\">Calle</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"calle\" id=\"calle\" required=\"true\"  maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"email\" class=\"cols-sm-2 control-label\">Colonia</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"colonia\" id=\"colonia\" required=\"true\"  maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"username\" class=\"cols-sm-2 control-label\">No Exterior</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"next\" id=\"next\" placeholder=\"\" required=\"true\" maxlength=\"45\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"password\" class=\"cols-sm-2 control-label\">No Interior</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"nint\" id=\"nint\" placeholder=\"\" required=\"true\" maxlength=\"45\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Codigo Postal</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"CP\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"6\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Referencia</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"ref\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Descripción Fachada</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"desc_fach\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group \">
				                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\">Continuar</button>
				                                    </div>
				                                    
				                                </form>
				                                </div>
				                             </div>";
								 	}else{
								 		echo "<div class=\"card-header\">Usted no tiene direcciones registradas, ingrese una dirección de entrega</div>
								 				<div class=\"card-body\">
				                                <form class=\"form-horizontal\" method=\"post\" action=\"pagar.php\"  >
				        							<input type=\"number\" id=\"cant\" name=\"cantidad\" style='display:none' value=\"".$_POST['cantidad']."\" required> 
				                                    <input type=\"number\" name=\"ID\" style='display:none' value=\"".$_POST['ID']."\" required>
				                                    <div class=\"form-group\">
				                                        <label for=\"name\" class=\"cols-sm-2 control-label\">Calle</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"calle\" id=\"calle\" required=\"true\"  maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"email\" class=\"cols-sm-2 control-label\">Colonia</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"colonia\" id=\"colonia\" required=\"true\"  maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"username\" class=\"cols-sm-2 control-label\">No Exterior</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"next\" id=\"next\" placeholder=\"\" required=\"true\" maxlength=\"45\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"password\" class=\"cols-sm-2 control-label\">No Interior</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"nint\" id=\"nint\" placeholder=\"\" required=\"true\" maxlength=\"45\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Codigo Postal</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"CP\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"6\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Referencia</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"ref\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group\">
				                                        <label for=\"confirm\" class=\"cols-sm-2 control-label\">Descripción Fachada</label>
				                                        <div class=\"cols-sm-10\">
				                                            <div class=\"input-group\">
				                                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
				                                                <input type=\"text\" class=\"form-control\" name=\"desc_fach\" id=\"confirm\" placeholder=\"\" required=\"true\" maxlength=\"120\" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class=\"form-group \">
				                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\">Continuar</button>
				                                    </div>
				                                    
				                                </form>
				                            </div>

				                        </div>";
								 	}
							?>
                            
                    </div>
                </div>
		</div>
		<div class="jumbotron text-right" style="margin-bottom:0; background-color: gray">
  			
		</div>
	</BODY>
</HTML> 
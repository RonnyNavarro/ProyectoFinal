<nav class="navbar navbar-expand-sm navbar-custom navbar-dark" style="margin-bottom:0;">
		  <a class="navbar-brand" href="#">Llantas Chiapas</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon" style="color:  white"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" style="color:white" href="index.php">INICIO</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" style="color:white" href="nosotros.php">NOSOTROS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" style="color:white" href="catalogo.php">CATÁLOGO</a>
		      </li>
		      <?php 
			      if (isset($_COOKIE["rango"]) && $_COOKIE["rango"]=="0")  {
			      	echo "<li class='nav-item'>";
			      	echo "<a class='nav-link' style='color:white' href='pedidos.php'>PEDIDOS</a>";
			      	echo "</li>";
			      	echo "<li class='nav-item'>";
			      	echo "<a class='nav-link' style='color:white' href='inventario.php'>INVENTARIO</a>";
			      	echo "</li>";
			      }
		      	
		      ?>
		      <li class="nav-item">
		        <a class="nav-link" style="color:white" href="contacto.php">CONTACTO</a>
		      </li>    
		    </ul>
		  </div>  
		</nav>
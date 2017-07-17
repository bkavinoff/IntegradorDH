<?php

require_once "validaciones.php";
require_once "usuarios.php";

// Inicializar mi usuario

$fueCompletado = isset($_REQUEST['submitted']);
$errores   = 0 ;

if ($fueCompletado) {
    $resultado = guardarUsuario($_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['correo'], $_REQUEST['username'], $_REQUEST['password'], $_FILES['avatar']);
    if (is_array($resultado) && ! empty($resultado)) {
        echo "Hubo errores";
      }else{
        echo "Usted se registro correctamente";
      }
 }

?>

<!DOCTYPE html>
<html>
  	<head>
        <title>REGISTRACION</title>
    		<?php require "cabecera.php";?>
  	</head>
  	<body>
        <div class="container-fluid">
    		    <!--//////////////<MENU SUPERIOR>///////////////-->
        		<?php require "navbar.php";?>
        		<!--//////////////</MENU SUPERIOR>///////////////-->
        		<!--//////////////<CABECERA>///////////////-->
        		<div class="main-header">
          			<div class="jumbotron text-center">
          					<h1>REGISTRACIÓN</h1>
          					<p class = "parrafo">Por favor ingresa los siguientes datos para registrarte. Todos los campos son obligatorios.</p>
        				</div>
      			</div>
        		<!--//////////////</CABECERA>///////////////-->
      			<!--//////////////<CONTENIDO>///////////////-->
        		<header class ="fondoregistracion container-fluid">
            		<form id='register' action='registro.php' method='post' enctype="multipart/form-data">
                		<input type='hidden' name='submitted' id='submitted' value='1'/>
                		<div>
                        <span class='error'></span>
                    </div>
              			<div class="container2">
                	      <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                  		        	<input class="form-control" type="text" placeholder="Nombre" name="nombre" id= "nombre" value= '' maxlength="50" required>
                  							<span style="color: red"  class='error'>
                  									<?php
                  											if (isset($errores['nombre'])) {
                  													echo "El nombre ingresado no es valido";
                  											}
                  									?>
                  							</span>
                  					</div>
                				</div>
              			</div>
              			<br>
              			<div class="container2">
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                 					 			<input class="form-control" type="text" placeholder="Apellido" name="apellido" id = "apellido" maxlength="50" required>
                								<span style="color: red"  class='error'>
                										<?php
                												if (isset($errores['apellido'])) {
                														echo "El apellido ingresado no es valido";
                                        }
                										?>
                  							</span>
                						</div>
                				</div>
              			</div>
              			<br>
			              <div class="container2">
                				<div class="form-group">
                  					<div class="col-lg-12 col-md-12 col-xs-12">
                   		        	<input class="form-control" type="text" placeholder="E-mail" name="correo" id = "correo" value=""  maxlength="50" required>
                  							<span style="color: red"  class='error'>
                  									<?php
                  											if (isset($errores['correo'])) {
                  													echo "El E-mail ingresado no es valido";
                  											}
                  									?>
                  							</span>
                						</div>
                				</div>
              			</div>
              			<br>
              			<div class="container2">
                				<div class="form-group">
                  					<div class="col-lg-12 col-md-12 col-xs-12">
                    						<input class="form-control" type='text' placeholder="Nombre de Usuario" name='username' id='username' value='' maxlength="50" /><br/>
                    						<span style="color: red"  class='error'>
                      							<?php
                      									if (isset($errores['username'])) {
                      											echo "El username ingresado no es valido";
                      									}
                      							?>
                      					</span>
                      			</div>
                    		</div>
                  	</div>
                  	<br>
              			<div class="container2">
                				<div class="form-group">
                  					<div class="col-lg-12 col-md-12 col-xs-12">
                                <input class="form-control" type="password" placeholder="Password" name="password" id = "password" maxlength="50" required>
                                <span style="color: red"  class='error'>
                                    <?php
                                        if (isset($errores['password'])) {
                												    echo "El password ingresado no es valido";
                    										 }
                    								 ?>
                  			 			 </span>
                  				  </div>
              				 </div>
            			</div>
                  <br>
            	    <br>
                	<div class='container2'>
                    <div class="form-group ">
                      <div class="col-lg-12 col-md-12 col-xs-12">
               				<label for='avatar' >Avatar:</label><br/>
                   		<input class="form-control" type='file' name='avatar'/><br/>
                   		<span id='register_username_errorloc' class='error'></span>
                    </div>
                    </div>
                  </div>
				          <div class="col-lg-2 col-md-2 col-xs-2">
            		 		 	<button class = "btn btn-success vermas" type="submit" value="Enviar">REGISTRARME</button>
          				</div>
                  <br>
                  <br>
              </form>
          </header>
	        <!--//////////////</CONTENIDO>///////////////-->
      	  <!--//////////////</FOOTER>///////////////-->
      		<?php require "footer.php";?>
          <!--//////////////</FOOTER>///////////////-->
      </div>
	 </body>
</html>

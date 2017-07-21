<?php
    require_once "usuarios.php";
    verificarUserLogueado();
    // Inicializar mi usuario
    $fueCompletado = isset($_REQUEST['submitted']);
    $registroOK=false;
    //$errores   = 0 ;
    if ($fueCompletado) {
        $resultado = guardarUsuario($_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['correo'], $_REQUEST['username'], $_REQUEST['password'], $_FILES['avatar']);
        if (!(is_array($resultado) && ! empty($resultado))) {
            $registroOK=true;
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
            <div class="container">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Registro de nuevo usuario
                    </div>
                </div>
          		<!--//////////////</CABECERA>///////////////-->
        		<!--//////////////<CONTENIDO>///////////////-->
          		<div class ="fondoregistracion container-fluid">
                    <div><span class="RegistroOK"><?php if ($registroOK) {echo "USUARIO REGISTRADO CORRECTAMENTE";}?></span></div>
              		<form id='register' action='registro.php' method='post' enctype="multipart/form-data">
                  		<input type='hidden' name='submitted' id='submitted' value='1'/>
                  		<div>
                            <span class='error'></span>
                        </div>
                		<div class="container2">
                  	         <div class="form-group">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <?php
                                        if (!isset($resultado['nombre'])&&(isset($_REQUEST['nombre']))){
                                            $nombreOK= $_REQUEST['nombre'];
                                        }else{$nombreOK="";}
                                    ?>
                    		        <input class="form-control" type="text" placeholder="Nombre" name="nombre" id= "nombre" value= '<?php echo $nombreOK ?>' maxlength="50" required >
                    			    <span style="color: red"  class='error'>
                    				    <?php
                    					    if (isset($resultado['nombre'])) {
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
                                    <?php
                                        if (!isset($resultado['apellido'])&&(isset($_REQUEST['apellido']))){
                                            $apellidoOK= $_REQUEST['apellido'];
                                        }else{$apellidoOK="";}
                                    ?>
                   					<input class="form-control" type="text" placeholder="Apellido" name="apellido" id = "apellido" value="<?php echo $apellidoOK ?>" maxlength="50" required>
                  					<span style="color: red"  class='error'>
                  						<?php
                  							if (isset($resultado['apellido'])) {
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
                                <?php
                                    if (!isset($resultado['correo'])&&(isset($_REQUEST['correo']))){
                                      $correoOK= $_REQUEST['correo'];
                                    }else{$correoOK="";}
                                ?>
                     		        	<input class="form-control" type="text" placeholder="E-mail" name="correo" id = "correo" value="<?php echo $correoOK ?>"  maxlength="50" required>
                    							<span style="color: red"  class='error'>
                    									<?php
                    											if (isset($resultado['correo'])) {
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
                                <?php
                                    if (!isset($resultado['username'])&&(isset($_REQUEST['username']))){
                                      $usernameOK= $_REQUEST['username'];
                                    }else{$usernameOK="";}
                                ?>
                      						<input class="form-control" type='text' placeholder="Nombre de Usuario" name='username' id='username' value='<?php echo $usernameOK ?>' maxlength="50" />
                      						<span style="color: red"  class='error'><?php if (isset($resultado['username'])) {echo "El username ingresado no es valido";}?></span>
                        			</div>
                      		</div>
                    	</div>
                    	<!--<br>-->
                			<div class="container2">
                  				<div class="form-group">
                    					<div class="col-lg-12 col-md-12 col-xs-12">
                                  <input class="form-control" type="password" placeholder="Password" name="password" id = "password" maxlength="50" required>
                                  <span style="color: red"  class='error'>
                                      <?php
                                          if (isset($resultado['password'])) {
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
            </div>
            </div>
  	        <!--//////////////</CONTENIDO>///////////////-->
        	  <!--//////////////</FOOTER>///////////////-->
        		<?php require "footer.php";?>
            <!--//////////////</FOOTER>///////////////-->

  	 </body>
</html>

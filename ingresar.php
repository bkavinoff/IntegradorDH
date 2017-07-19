<?php

require_once "usuarios.php";


if (isset($_REQUEST['submitted']) && $_REQUEST['submitted'] == 1) {
  $user = buscarUsuario($_REQUEST['username']);

  if ($user) {
    //SETEAMOS LA COOKIE DE USUARIO
    if (isset($_REQUEST['chkRecordarUsuario'])&& $_REQUEST['chkRecordarUsuario']=='recordar'){
			setcookie('nombreUsuario',$_REQUEST['username'],time()+(3600*24*30));//1 mes
			setcookie('passwordUsuario',$_REQUEST['password'],time()+(3600*24*30));//1 mes
		}else{
		    setcookie('nombreUsuario',$_REQUEST['username'],time()+10);//segundos
		      setcookie('passwordUsuario',$_REQUEST['password'],time()+10);//segundos

    }
    header('Location: bienvenido.php');
  } else {
    echo "Aun no se encuentra registrado";
  }
}

?>

<!DOCTYPE html>
<html>
	  <head>
      <title>INGRESAR</title>
  		<?php require "cabecera.php";?>
    </head>
    <body>
        <div class="container-fluid">
            <div>
		            <!--//////////////<MENU SUPERIOR>///////////////-->
		            <?php require "navbar.php";?>
		            <!--//////////////</MENU SUPERIOR>///////////////-->
  	            <!--//////////////<CABECERA>///////////////-->
		            <div class="main-header">
		                <div class="jumbotron text-center">
		                    <h1>ACCEDER</h1>
		    		        		<div class="parrafo">Escribe tu e-mail y contraseña para ingresar.</div>
	                  </div>
		            </div>
                <br>
		            <!--//////////////</CABECERA>///////////////-->
		            <!--//////////////<CONTENIDO>///////////////-->
		            <form id='ingresar' action='ingresar.php' method='post'>
		    	          <div class ="fondoregistracion text-center">
		    	              <br>
		    	              <input type='hidden' name='submitted' id='submitted' value='1'/>
                        <div class="container">
                            <div class="form-group">
                                <div class="col-lg-4 col-md-4 col-xs-4">
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4">
                                  <input class="form-control" type='text' placeholder="Ingresa tu usuario"name="username" id='username' value="" maxlength="50" required>
                                  <span style="color: red"  class='error'>
                                      <?php
                                          if (isset($errores['username']))
                                          {
                                              echo "El usuario ingresado no es valido";
                                          }
                                      ?>
                                  </span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4">
                                </div>
                            </div>
                          </br>
                            <div class="form-group">
                                <div class="col-lg-4 col-md-4 col-xs-4">
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4">
			        		                  <input class="form-control" type="password" placeholder="Ingresa tu contraseña"name="password"  id='password' value="" maxlength="50" required>
			        		                  <span style="color: red"  class='error'>
			        				                  <?php
			        				      		            if (isset($errores['password']))
                                            {
			        				      				            echo "El password ingresado no es valido";
			        				      		            }
			        				                  ?>
			        		                  </span></br>
                                    <input type="checkbox" name="chkRecordarUsuario" value="recordar">Recordar Usuario</br>
			        		                  <a style="color:black;" href="#">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4">
                                </div>
                            </div>
                          </div>
		                    <button type="submit" class = "btn btn-success vermas">INGRESAR</button>
	              </form>
		            <!--//////////////</CONTENIDO>///////////////-->
            </div>
        </div>
        <!--//////////////</FOOTER>///////////////-->
			  <?php require "footer.php";?>
		    <!--//////////////</FOOTER>///////////////-->
	  </body>
</html>

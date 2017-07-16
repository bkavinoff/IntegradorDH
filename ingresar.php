<?php

require_once "usuarios.php";

if (isset($_REQUEST['submitted']) && $_REQUEST['submitted'] == 1) {
  $user = buscarUsuario($_REQUEST['username']);

  if ($user) {
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
		<meta charset="utf-8">
		<link rel="stylesheet" href="css1/bootstrap.css">
		<link rel="stylesheet" href="css1/estilos.css">
	</head>
	<body>

<div id='fg_membersite'>

<div class="container">
		<!--//////////////<MENU SUPERIOR>///////////////-->
		<nav class="navbar"><!--   navbar-inverse  -->
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Integrador DH</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Inicio</a></li>
							<li><a href="faq.php">F.A.Q.</a></li>
							<li><a href="registro.php">Registrarse</a></li>
							<li><a href="ingresar.php">Ingresá</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<!--//////////////</MENU SUPERIOR>///////////////-->

  	<!--//////////////<CABECERA>///////////////-->
					<div class="main-header">
						<div class="jumbotron text-center">
		        <h1>ACCEDER</h1>
						<div class="parrafo">Escribe tu e-mail y contraseña para ingresar.</div>
					</div>
				</div>
    <br>
		<!--//////////////<CABECERA>///////////////-->

		<!--//////////////<CONTENIDO>///////////////-->
			<form id='register' action='ingresar.php' method='post' enctype="multipart/form-data">
			<header class ="fondoregistracion">
			<br>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
      <div class="container1">
          <div class="row">
		      <div class="col-lg-4 col-md-4 col-xs-4">
		      <label class= "cuadro" for="username"></label>
		        <input type='text' placeholder="Ingresa tu usuario"name="username" id='username' value="" maxlength="50" required>
						<span style="color: red"  class='error'>
								<?php
										if (isset($errores['username'])) {
												echo "El usuario ingresado no es valido";
										}
								?>
          </div>
          </div>
        <br>

          <div class="container2">
              <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-4">
				<label class= "cuadro" for="password"> </label>
					<input type="password" placeholder="Ingresa tu contraseña"name="password"  id='password' value="" maxlength="50" required>
					<span style="color: red"  class='error'>
							<?php
									if (isset($errores['password'])) {
											echo "El password ingresado no es valido";
									}
							?>
					</span>
					<br>
					<a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        </div>
			 <br>
		   <br>
		    <button type="submit" class = "btn btn-success vermas">INGRESAR</button>
		    <br>
		    <br>
				<br>
				</header>
				</form>

		<!--//////////////<CONTENIDO>///////////////-->

		<!--//////////////</FOOTER>///////////////-->
			<div class="container-fluid footer">
						<footer>
							<p class="text-center">&copy; Copyright 2017  Andres Barrios - Brian Kavinoff - Javier Portela</p>
						</footer>
			</div>
		</div>
		<!--//////////////</FOOTER>///////////////-->

</div>

	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
    <title>INGRESAR</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
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
							<li><a href="ingresar.php">Loguearse</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<!--//////////////</MENU SUPERIOR>///////////////-->

		<!--//////////////<CONTENIDO>///////////////-->
    <div class="container">
      <div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="main-header">
						<div class="jumbotron text-center">
		        <h1>ACCEDER</h1>
						<div class="parrafo">Escribe tu e-mail y contraseña para ingresar.</div>
					</div>
				</div>
        </div>
        </div>
    <br>

			<header class ="fondoregistracion">
  		<form action="script.php" method="post">
			<br>
      <div class="container2">
          <div class="row">
		      <div class="col-lg-4 col-md-4 col-xs-4">
		      <label class= "cuadro" for="E-mail"></label>
		        <input type="email" placeholder="Ingresa tu E-mail"name="correo" required>
          </div>
          </div>
        <br>


          <div class="container3">
              <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-4">
				<label class= "cuadro"   for="Contraseña"> </label>
					<input type="Contraseña" placeholder="Ingresa tu contraseña"name="Contraseña" required>
        </div>
        </div>
			 <br>
		   <br>
		    <button type="button" class = "btn btn-success vermas">INGRESAR</button>
		    <br>
		    <br>
				<br>
				</header>

		<!--//////////////<CONTENIDO>///////////////-->

		<!--//////////////</FOOTER>///////////////-->
			<div class="container-fluid footer">
						<footer>
							<p class="text-center">&copy; Copyright 2017  Andres Barrios - Brian Kavinoff - Javier Portela</p>
						</footer>
			</div>
		</div>
		<!--//////////////</FOOTER>///////////////-->

	</body>
</html>

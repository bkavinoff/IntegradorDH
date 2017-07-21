<?php
	require "validaciones.php";
	verificarUserDeslogueado();
 ?>

<!DOCTYPE html>
<html>
	<head>
    	<title>BIENVENIDO</title>
		<?php require "cabecera.php";?>
	</head>
	<body>
		<div class="container-fluid">
			<!--//////////////<MENU SUPERIOR>///////////////-->
			<?php require "navbar.php";?>
			<!--//////////////</MENU SUPERIOR>///////////////-->
  			<!--//////////////<CABECERA>///////////////-->
			<div class="container">
				<div class="panel panel-success text-center">
					<div class="panel-heading">
						<?php echo '¡Bienvenido ' . $_COOKIE["nombreUsuario"].'! Ya podés navegar en nuestro sitio completo. '?>
					</div>
				</div>
			</div>
    		<br>
			<!--//////////////<CABECERA>///////////////-->
			<!--//////////////</FOOTER>///////////////-->
			<?php require "footer.php";?>
			<!--//////////////</FOOTER>///////////////-->
		</div>
	</body>
</html>

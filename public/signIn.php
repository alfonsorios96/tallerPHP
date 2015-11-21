<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Regístrate</title>
	<?php
		include 'decorator.html';
	?>
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<div class="main">
		<div class="container wow bounceInDown">
	      <form name="formLogin" class="form-login" action="actions/signIn.php" method="POST">
	        <h2 class="form-login-heading">Registrarse</h2>
	        <label for="email" class="sr-only">Correo electrónico</label>
	        <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" required autofocus>
	        <input type="text" id="name" name="name" placeholder="Nombre completo" class="form-control" required>
	        <input type="date" id="birthday" name="birthday" required>
	        <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	      </form>
    	</div> <!-- /container -->
	</div>
</body>
</html>
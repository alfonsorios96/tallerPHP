<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Curso de PHP Orientado a Objetos</title>
</head>
<body>
	<h2><?= 'Hola mundo desde PHP'?></h2>
	<?php
		require '../vendor/autoload.php';

		$array = [
			"id" => 1,
			"firstName" => 'Alfonso',
			"lastName" => 'Rios',
			"fullName" => 'Alfonso Rios',
			"email" => 'mriosm1100@outlook.com',
			"password" => md5('pru3b4')];
			
		$usuario_dummy = new Models\User($array);
	?>
	<div>
		<h3><?= $usuario_dummy->getFullName()?></h3>
	</div>
</body>
</html>
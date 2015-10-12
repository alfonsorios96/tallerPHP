<?php
	require '../vendor/autoload.php';
	use Controllers\UserController as UserController;

	session_start();
	$id = $_SESSION['id'];
	session_write_close();
	if (!isset($id)) {
		header("Location: logIn.php");
	}

	$controller = new UserController();
	$user = $controller->getUserId($id);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<?php
		include 'decorator.html';
	?>
</head>
<body>
	<div class="container">
		<header class="container">
			<h2>Bienvenido <strong><?= $user->getFullName()?></strong></h2>
		</header>
		<section>
			<table class="table">
				<thead>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
					<th>Clave en md5</th>
				</thead>
				<tbody>
					<tr>
						<td><?= $user->getFirstName()?></td>
						<td><?= $user->getLastName()?></td>
						<td><?= $user->getEmail()?></td>
						<td><?= $user->getPassword()?></td>
					</tr>
				</tbody>
			</table>
		</section>
	</div>
</body>
</html>
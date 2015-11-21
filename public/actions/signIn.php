<?php
	require '../../vendor/autoload.php';

	use Controllers\UserController as UserController;

	$correo = $_POST['email'];
	$nombre = $_POST['name'];
	$cumple = $_POST['birthday'];

	$controlador = new UserController();
	$controlador->guardar($cumple, $nombre);
?>
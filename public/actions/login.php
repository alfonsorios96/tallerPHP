<?php
	require '../../vendor/autoload.php';
	
	use Controllers\UserController as UserController;

	if (isset($_POST['email']) && isset($_POST['password'])) {
		$controller = new UserController();
		$user = $controller->getUser($_POST['email'], $_POST['password']);

		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

		if ($user != NULL) {
			$extra = 'home.php';
			session_start();
			$_SESSION['id'] = $user->getId();
			session_write_close();
			header("Location: http://$host/demo/$extra");
		}else{
			$extra = 'login.php';
			header("Location: http://$host/demo/$extra");
		}
		exit;
	}
?>
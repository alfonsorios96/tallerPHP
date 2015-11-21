<?php namespace Controllers;
	/**
	* @author : Alfonso Ríos
	* @class : UserController
	* @description : Functional implements to the class User
	*/

	//require_once '../vendor/autoload.php';

	use Models\Connection as Con;
	use Models\User as User;

	class UserController {
		const TABLE = 'user';

		public function __construct()
		{
			# code...
		}

		public function getUser($email, $password)
		{
			$conn = new Con();
	       	$query = $conn->prepare('SELECT * FROM ' . self::TABLE . ' WHERE email = :email AND password = :password');
	       	$query->bindParam(':email', $email);
	       	$query->bindParam(':password', md5($password));
	       	$query->execute();
	       	$row = $query->fetch();
	       	if($row){
	       		$obj = new User($row);
	       	   	return $obj;
	       	}else{
	       	   	return false;
	       	}
		}

		public function getUserId($id)
		{
			$conn = new Con();
	       	$query = $conn->prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
	       	$query->bindParam(':id', $id);
	       	$query->execute();
	       	$row = $query->fetch();
	       	if($row){
	       		$obj = new User($row);
	       	   	return $obj;
	       	}else{
	       	   	return false;
	       	}
		}

		public function guardar($cumple, $nombre)
		{
			// 26 min + 26 may + 10 num; n = 62
			// r = 6
			// ... Número de permutaciones posibles = 62^6 = 56,800,235,584
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $clave = '';
		    for ($i = 0; $i < 6; $i++) {
		        $clave .= $characters[rand(0, strlen($characters))];
		    }
		    $diff = abs(strtotime(date('y-m-d')) - strtotime($cumple));
			$years = floor($diff / (365*60*60*24));
			$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			$array2 = explode(" ", $nombre);
			$primerNombre = $array2[0];
			$apellido = $array2[1];
		}
	}
?>
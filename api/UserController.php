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
	}
?>
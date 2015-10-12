<?php namespace Models;

	/**
	* @author : Alfonso Ríos
	* @class : User
	* @description : This is the model of a user.
	*/

	class User{
		private $id;
		private $firstName;
		private $lastName;
		private $fullName;
		private $email;
		private $password;

		public function __construct($obj_assoc){
			$this->setId($obj_assoc['id']);
			$this->setFirstName($obj_assoc['firstName']);
			$this->setLastName($obj_assoc['lastName']);
			$this->setFullName($obj_assoc['fullName']);
			$this->setEmail($obj_assoc['email']);
			$this->setPassword($obj_assoc['password']);
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setFirstName($firstName)
		{
			$this->firstName = $firstName;
		}

		public function getFirstName(){
			return $this->firstName;
		}

		public function setLastName($lastName)
		{
			$this->lastName = $lastName;
		}

		public function getLastName(){
			return $this->lastName;
		}

		public function setFullName($fullName)
		{
			$this->fullName = $fullName;
		}

		public function getFullName(){
			return $this->fullName;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setPassword($password)
		{
			$this->password = $password;
		}

		public function getPassword(){
			return $this->password;
		}
	}
?>
<?php namespace Models;
	/**
	* @author : Alfonso Ríos
	* @class : Connection
	* @description : This is the model of the connection to database.
	*/

	use PDO as PDO;

	class Connection extends PDO
	{
	   private $tipo_de_base = 'mysql';
	   private $host = 'localhost';
	   private $nombre_de_base = 'tallerphp';
	   private $usuario = 'root';
	   private $contrasena = 'n0m3l0'; 

		function __construct()
		{
		  try{
	         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base.';charset=utf8', $this->usuario, $this->contrasena);
	      }catch(PDOException $e){
	         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
	         exit;
	      }
		}
	}
?>
<?php
	$host="127.0.0.1";
	$username="root"; 
	$password="";   
	$db_name="soccer"; 

	$mysqli = new mysqli($host, $username, $password, $db_name);
	$mysqli->set_charset("utf8");

	class DBconnection{
		private $host="127.0.0.1";
	 	private $username="root"; 
		private $password="";   
		private $db_name="soccer"; 

		public $con = null;

		public function __construct(){
			$this->con = new mysqli(
				$this->host,
				$this->username,
				$this->password,
				$this->db_name
			);
			$this->con->set_charset("utf8");
		}
		public function getConnection(){
			return $this->con;
		}
	}

?>

<?php 
	class ConnectDB {
		function connect(){
			$server = 'localhost'; //$server = '127.0.0.1';
			$username = 'root';
			$password = '12345678'; //$password = '';
			$database = '18php04_shop3';
			$this->conn = mysqli_connect($server, $username, $password, $database);
			return $this->conn;
		}
	}
?>

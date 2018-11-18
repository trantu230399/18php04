<?php 
	class User {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertUser($name, $username,$role, $password,$images,$url){
			$sql = "INSERT INTO users (name, username,role, password,images,url) VALUES ('$name', '$username', 'role','$password','$images','$url')";
			return mysqli_query($this->conn, $sql);
		}
		
	}
?>
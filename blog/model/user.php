<?php 
	class User {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertUser($name, $username, $password,$images,$url){
			$sql = "INSERT INTO users (name, username, password,images,url) VALUES ('$name', '$username', '$password','$images','$url')";
			return mysqli_query($this->conn, $sql);
		}
		
	}
?>
<?php 
	class User {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertUser($name, $username,$role, $password,$images,$url){
			$sql = "INSERT INTO users (name, username,role, password,images,url) VALUES ('$name', '$username', '$role','$password','$images','$url')";
			return mysqli_query($this->conn, $sql);
		}
		function ListUser($limit,$page){
			$start = ($page -1)* $limit;
			$sql = "SELECT * FROM users LIMIT $start,$limit";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getTotalUser(){
			$sql = "SELECT id FROM users";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		function checkLogin($username, $password){
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		
	}
?>
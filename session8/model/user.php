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
		function getListUser($limit,$page){
			$start = ($page -1)* $limit;
			$sql = "SELECT * FROM users LIMIT $start,$limit";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getUserInfo($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $username){
			$sql = "UPDATE users SET name = '$name', username = '$username' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		function getTotalUser(){
			$sql = "SELECT id FROM users";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>
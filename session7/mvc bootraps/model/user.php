<?php 
	include 'config/connectdb.php';
	class User extends ConnectDB{
		function InsertUser($name, $username, $password,$images,$url){
			$sql = "INSERT INTO users (name, username, password,image,url) VALUES ('$name', '$username', '$password','$image','$url')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM users";
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
		//Product
		function InsertProduct($name, $price, $description,$images,$url){
			$sql = "INSERT INTO products (name, price, description,image,url) VALUES ('$name', '$price', '$description','$images','$url')";
			return mysqli_query($this->conn, $sql);
		}
		function getListProduct(){
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function getProductInfo($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditProduct($id, $name, $price){
			$sql = "UPDATE products SET name = '$name', price = '$price' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
	
	}
?>
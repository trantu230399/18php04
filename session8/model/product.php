<?php 
	class Product {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertProduct($name, $price, $imageName, $product_category_id,$description){
			$sql = "INSERT INTO products (name, product_category_id, price, image,description) VALUES ('$name', $product_category_id, '$price', '$image','$description')";
			return mysqli_query($this->conn, $sql);
		}
		//funtion frontend
		function getListProduct($category_id) {
			if ($category_id != ''){
				$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
				products.product_category_id = product_categories.id WHERE product_category_id = $category_id";
			} else {
				$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
				products.product_category_id = product_categories.id";
			}
			
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListProductAdmin($page,$limit) {
			$start = ($page - 1) * $limit;
			$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
			products.product_category_id = product_categories.id LIMIT $start,$limit";
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
		function EditProduct($id, $name, $price, $image, $product_category_id){
			$sql = "UPDATE products SET name = '$name', product_category_id = $product_category_id, price = '$price', image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function getListCategory($product_category_id = null) {
			$sql = "SELECT * FROM product_categories";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['name'];
				$selected = ($id == $product_category_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}
		function Detail($id){
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function Dangki($username,$password){
			$sql = "INSERT INTO cart ( user_id, password) VALUES ( '$username', '$password')";
			return mysqli_query($this->conn, $sql);
		}
		function ADD($id,$cart_id){
			$sql = "INSERT INTO cart_details ( cart_id, product_id) VALUES ( '$cart_id', '$id')";
			return mysqli_query($this->conn, $sql);
		}
		function getTotalProduct(){
			$sql = "SELECT id FROM products";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
	}
?>
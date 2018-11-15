<?php 
include "config/connectdb.php";
include "model/user.php";
include "model/product.php";
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
				if(isset($_POST['add_user'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$image=$_FILES['image']['name'];
					move_uploaded_file($image);	
					$userModel = new User();
					$userModel->InsertUser( $username, $password,$image);
				}
					//view du lieu
					include 'view/add_user.php';
					break;
				case 'list_user':
				    $userModel = new User();
					$listUser =$userModel->getListUser();
					//view du lieu
					include 'view/list_user.php';
					break;
				
				case 'add_product':
				if(isset($_POST['add_product'])){
					$name = $_POST['name'];
					$productModel = new Product();
					$productModel-> InsertProduct($name);
				}
					//view du lieu
					include 'view/add_product.php';
					break;
				case 'list_product':
				$productModel = new Product();
				$listProduct =$productModel-> getListProduct();
					//view du lieu
					include 'view/list_product.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>
<?php 
include 'model/user.php';
include 'config/connectdb.php';
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
					if(isset($_POST['add_user'])){
						//upload images
						$url="images/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($images,$url);								
						//lay du lieu form
						$name = $_POST['name'];
						$username = $_POST['username'];
						$role = $_POST['role'];
						$password = $_POST['password'];
						$userModel = new User();
						$userModel->InsertUser($name, $username,$role, $password,$images,$url);
					}
					//view du lieu
					include 'view/add_user.php';
					break;
				case 'list_user':
					//view du lieu
					include 'view/list_user.php';
					break;
				
				case 'add_product':
					//view du lieu
					include 'view/add_product.php';
					break;
				case 'list_product':
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
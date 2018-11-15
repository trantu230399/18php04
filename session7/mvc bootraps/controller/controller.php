<?php 
	include 'model/user.php';
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
					if(isset($_POST['add_user'])) {
						$url="images/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($name,$url);									
						$name     = $_POST['name'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$userModel->InsertUser($name, $username, $password,$images,$url);
						header("Location: index.php?action=list_user");
					}
					include 'view/add_user.php';
					break;
				case 'list_user':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
					$userModel = new User();
					$listUser =$userModel->getListUser();
					//view du lieu
					include 'view/list_user.php';
					break;
				case 'delete_user':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
					$id = $_GET['id'];
					$userModel = new User();
					$userModel->deleteUser($id);
					//view du lieu
					header("Location: index.php?action=list_user");
					break;
				case 'edit_user':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
					$id = $_GET['id'];
					$userModel = new User();
					$userEdit = $userModel->getUserInfo($id);
					while ($row = $userEdit->fetch_assoc()) {
						$nameEdit = $row['name'];
						$usernameEdit = $row['username'];
					}
					if(isset($_POST['edit_user'])) {
						$name     = $_POST['name'];
						$username = $_POST['username'];
						$userModel = new User();
						$userModel->EditUser($id, $name, $username);
						header("Location: index.php?action=list_user");
					}
					include 'view/edit_user.php';
					break;	
					//---Product----	
				case 'add_product':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
				if(isset($_POST['add_product'])) {
					$url="product/".$_FILES['images']['name'];
					$images=$_FILES['images']['name'];
					move_uploaded_file($images,$url);									
					$name     = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$userModel = new User();
					$userModel-> InsertProduct($name, $price, $description,$images,$url);	
					header("Location: index.php?action=list_product");			
				}
					//view du lieu
					include 'view/add_product.php';
					break;
				case 'list_product':
				if(!isset($_SESSION['login'])){
					header("Location: login.php");
				}
				    $userModel = new User();
					$listProduct =$userModel->getListProduct();
					//view du lieu
					include 'view/list_product.php';
					break;
					case 'delete_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$userModel->deleteProduct($id);
					//view du lieu
					header("Location: index.php?action=list_product");
					break;
					case 'edit_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$productEdit = $userModel->getProductInfo($id);
					while ($row = $productEdit->fetch_assoc()) {
						$nameEdit = $row['name'];
						$priceEdit = $row['price'];
					}
					if(isset($_POST['edit_product'])) {
						$name  = $_POST['name'];
						$price = $_POST['price'];
						$userModel = new User();
						$userModel->EditProduct($id, $name, $price);
						header("Location: index.php?action=list_product");
					}
					include 'view/edit_product.php';
					break;		
					case 'login':
					//view du lieu
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$checkLogin = $userModel->checkLogin($username, $password);
						if($checkLogin) {
							$_SESSION['login'] = $username;
							header("Location: index.php");
						} else {
							header("Location: login.php");
						}
					}
					break;
					case 'logout':
					unset($_SESSION['login']);
					header("Location: login.php");
					exit();
					//view du lieu
					break;
					
				default:
					# code...
					break;
			}
		}
	}
?>
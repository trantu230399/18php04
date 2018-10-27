<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/product.php';
	class FrontendController {
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					$category_id = isset($_GET['category_id'])?$_GET['category_id']:'';
					$productModel = new Product();
					$listProduct =$productModel->getListProduct($category_id);
					// $newsModel = new News();
					// $listNews =$newsModel->getListNews($category_id);
					
					// $userModel = new User();
					// $listUsers =$userModel->getListUser();
					include 'view/frontend/home.php';
					break;
				case 'product_detail':
					$id = $_GET['id'];
					$category_id = isset($_GET['category_id'])?$_GET['category_id']:'';
					$productModel = new Product();
					$listProduct =$productModel->getListProduct($category_id);
					//
					$detail = new Product();
					$listDetail =  $detail->Detail($id);
					// goi mode product de lay thong tin san
					// pham theo ID
					include 'view/frontend/product_detail.php';
					# code...
					break;
				case 'dangki':
					$id ='';
					if(isset($_POST['dangki'])) {							
						$username = $_POST['username'];
						$password = $_POST['password'];
						$users = new Product();
						$users->Dangki($username,$password);
						header("Location: index.php?action=add_cart&id='$id'");
					}
					include 'view/frontend/dangki.php';
				break;	
					case 'add_cart':
						$id = $_GET['id'];
						$category_id = isset($_GET['category_id'])?$_GET['category_id']:'';
						$productModel = new Product();
						$listProduct =$productModel->getListProduct($category_id);
						//
						$detail = new Product();
						$listDetail =  $detail->Detail($id);
					if(isset($_POST['add'])){
						$id = $_GET['id'];
						$cart_id = 1;
					   $add =new Product();
					   $add -> ADD($id,$cart_id);
					}
						
						include 'view/frontend/add_cart.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>
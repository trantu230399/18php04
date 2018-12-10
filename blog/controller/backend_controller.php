<?php 
include 'model/user.php';
include 'model/news.php';
include 'model/detail.php';
include 'config/connectdb.php';
	class Controller {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':			
					//check login
					$this->checkLogin();
					//
					if(isset($_POST['add_user'])){
						//upload images
						$url="images/friend/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($images,$url);								
						//lay du lieu form
						$name = $_POST['name'];
						$username = $_POST['username'];
						$role = $_POST['role'];
						$password = $_POST['password'];
						$userModel = new User();
						$userModel->InsertUser($name, $username,$role, $password,$images,$url);
						header("Location:admin.php?action=list_user");
					}		
					//view du lieu
					include 'view/backend/add_user.php';
					break;
				case 'list_user':
					//checklogin
					$this->checkLogin();
					//phan trang
					$page = isset($_GET['page'])?$_GET['page']:1;
					$limit = 3;
					//dua vao controller
					$userModel = new User();
					$listUser  = $userModel-> ListUser($limit,$page);
					$totalUser = $userModel->getTotalUser();
					$numberPage = ceil($totalUser/$limit);
					//view du lieu
					include 'view/backend/list_user.php';
					break;
				case 'add_news':
					//checklogin
					$this->checkLogin();
					//show category
						$newsModel = new News();
						$category = $newsModel->getListCategory();
						if(isset($_POST['add_news'])){
						//lay du lieu form
						$url="images/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($images,$url);
						// lay du lieu ti form	
						$title = $_POST['title'];
						$descript = $_POST['descript'];
						$content = $_POST['content'];
						$news_categories_id = $_POST['nation'];
						//dua vao controller
						$newsModel = new News();
						$newsModel->InsertNews($title,$descript,$content,$images,$url,$news_categories_id);
						header("Location:admin.php?action=list_news");
					}
					//view du lieu
					include 'view/backend/add_news.php';
					break;
				//list news	
				case 'list_news':
				//checklogin
					$this->checkLogin();
					//phan trang
					$page = isset($_GET['page'])?$_GET['page']:1;
					$limit = 4;
					$newsModel = new News();
					$listNews = $newsModel->ListNews($page,$limit);
					$totalNews = $newsModel->getTotalNews();
					$numberPage = ceil($totalNews/$limit);
					//view du lieu
					include 'view/backend/list_news.php';
					break;
				//delete news	
				case 'delete_news':
				//checklogin
				$this->checkLogin();
					$id = $_GET['id'];
					$deleteNews = new News();
					$deleteNews->DeleteNews($id);
					header("Location:admin.php?action=list_news");
					break;
				//edit news	
				case 'edit_news':
				//checklogin
				$this->checkLogin();
					//show du lieu cu
					$id = $_GET['id'];
					$newsModel = new News();
					$category = $newsModel->getListCategory();
					$newsEdit = $newsModel->getNewsInfo($id);
					while($row = $newsEdit->fetch_assoc()){
						$titleEdit = $row['title'];
						$descriptEdit = $row['decription'];
						$contentEdit = $row['content'];
						$imagesEdit = $row['images'];
					}
					//edit du lieu moi
					if(isset($_POST['edit_news'])){
						$id = $_GET['id'];
						$url="images/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($images,$url);
						$title = $_POST['title'];
						$descript = $_POST['descript'];
						$content = $_POST['content'];
						$news_categories_id = $_POST['nation'];
						$newsModel = new News();
						$newsModel->EditNews($title,$descript,$content,$news_categories_id,$images,$url,$id);
						header("Location:admin.php?action=list_news");
					}
					//view du lieu edit
					include 'view/backend/edit_news.php';
					break;
						//add detail
				case 'add_detail':
					if (isset($_POST['add_detail'])) {
						$url="images/player/".$_FILES['images']['name'];
						$images=$_FILES['images']['name'];
						move_uploaded_file($images,$url);
						$name     = $_POST['name'];
						$location = $_POST['location'];
						$content  = $_POST['content'];
						$detail   = new Detail();
						$detail   ->InsertDetail($name,$location,$content,$images,$url);
						header("Location:admin.php?action=list_detail");
					}
					//view dữ liệu
					include 'view/backend/add_detail.php';
					break;
				case 'list_detail':
					$detail = new Detail();
					$ListDetail = $detail->ListDetail();
					//view dữ liệu
					include 'view/backend/list_detail.php';
					break;	
				//text login	
				case 'login':
				//view du lieu
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$checkLogin = $userModel->checklogin($username, $password);
						if($checkLogin) {
							$_SESSION['login'] = $username;
							header("Location: admin.php?action=list_news");
						} else {
							header("Location:login.php");
						}
					}
						break;	
				default:
					# code...
					break;
			}			
		}
		function checkLogin(){
			if(!isset($_SESSION['login'])){
				header("Location: login.php");
			}
		}
	}
?>
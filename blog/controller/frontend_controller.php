<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/news.php';
	include 'model/comment.php';
	class FrontendController {
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
			case 'home':
				//phan trang
				$page = isset($_GET['page'])?$_GET['page']:1;
				$limit = 5;
				$numberPage = ceil($totalUser/$limit);
				$category_id = isset($_GET['category_id'])?$_GET['category_id']:'';
				$newsModel = new News();
				// $listProduct =$productModel->ListNews();
				$listNews =$newsModel->GetListNews($category_id,$page,$limit);
				//Lay tat ca id
				$totalNews = $newsModel->getTotalNews();
				//so trang
				$numberPage = ceil($totalNews/$limit);
				include 'view/frontend/home.php';
				break;
				//
			case 'news_detail':
				//phan trang cho comment
				$page = isset($_GET['page'])?$_GET['page']:1;
				$limit = 3;
				//show tin tuc
				$id = $_REQUEST['id'];
				$detail = new News();
				//show detail
				$listDetail = $detail->GetDetail($id);
				$test       = $detail->GetDetail($id);
				$comment    = new Comment();
				//list comment
				$listComment = $comment->ListComment($id,$limit,$page);
				// lay tat ca cac id tuong ung voi comment
				$totalComment = $comment->getTotalComment($id);
				$numberPage = ceil($totalComment/$limit);
				if($listDetail){
					while($row=$test->fetch_assoc()){
						$news_categories_id = $row['news_categories_id'];
						}
				}
				$ListRelate = $detail->RelateNews($news_categories_id);
				include 'view/frontend/detail.php';
				
				break;
				//phan comment
			case 'news_comment':	
					//ktra da login chua
				if (isset($_SESSION['dang-nhap'])) {
					$user = $_SESSION['dang-nhap'];
					$id = $_GET['id'];
					if(isset($_POST['comment'])){
						$content = $_POST['content'];
						$detail = new Comment();
						$detail->SaveComment($id,$content,$user);
						header("Location:index.php?action=news_detail&id=$id");
					}	
				}else{
					header("Location:dang-nhap.php");
				}
				break;
				// phan login de comment
			case 'login':
				if(isset($_POST['dang-nhap'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$userModel = new Comment();
					$checkLogin = $userModel->checkLogin($username,$password);
						if($checkLogin){
							$_SESSION['dang-nhap']=$username;
							header("Location:index.php");
						}else{
							header ("Location:dang-nhap.php");
						}
				}	
				break;
			case 'list_clb':
				include 'text.html';
				break;		
			default:
					# code...
				break;
			}
		}
	}
?>
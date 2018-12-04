<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/news.php';
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
			case 'news_detail':
				$id = $_REQUEST['id'];
				$detail = new News();
				$listDetail = $detail->GetDetail($id);
				include 'view/frontend/detail.php';
				break;
			case 'list_clb':
				echo "abc";
				break;		
			default:
					# code...
				break;
			}
			
		}
	}
?>
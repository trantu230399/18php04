<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/news.php';
	include 'model/like.php';
	include 'model/comment.php';
	class FrontendController {
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					//Gia su da login bang user 2
					$_SESSION['login']['user_id'] = 2;
					$newsModel = new News();
					$listNews = $newsModel->getListNews();
					include 'views/frontend/news/news_list.php';
					break;
				case 'news_detail':
					$id = $_GET['id'];
					$newsModel = new News();
					$newsDetail = $newsModel->getNewsDetail($id);
					//Show comment
					$commentModel = new Comment();
					$listComments = $commentModel->getListCommentByNews($id);
					// End show comment
					//show like
					$Like = new Likes();
					$ListLike = $Like ->ListLike($id);
					include 'views/frontend/news/news_detail.php';
					# code...
					break;
					case 'like':
					if (isset($_SESSION['login'])) {
						if(isset($_POST['like'])){
						$user_id = $_SESSION['login']['user_id'];
						$news_id = $_GET['id'];
						$likeModel = new Comment();
						$likeModel->saveLike($user_id, $news_id);
						header("Location: index.php?action=news_detail&id=$news_id");
						}
					}
				case 'news_comment':
					if (isset($_SESSION['login'])) {
						$user_id = $_SESSION['login']['user_id'];
						$news_id = $_GET['id'];
						$content = $_POST['content'];
						$commentModel = new Comment();
						$commentModel->saveComment($user_id, $news_id, $content);
						header("Location: index.php?action=news_detail&id=$news_id");
					} else {
						header("Location: index.php?action=login");
					}
				case 'login':
						include 'views/login.php';
						break;
				default:
					# code...
					break;
			}
		}
	}
?>
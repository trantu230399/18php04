<?php 
	class News {
		//lấy giá trị từ cofig
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		//ADD News trong admin
		function InsertNews($title,$descript,$content,$images,$url,$news_categories_id){
            $sql = "INSERT INTO news (title, decription,content,images,url,news_categories_id,created) VALUES ('$title', '$descript', '$content','$images','$url','$news_categories_id',now())";
            return mysqli_query($this->conn, $sql);
		}
		//List New trong admin
        function ListNews($page,$limit){
			$start = ($page-1)*$limit;
            $sql = "SELECT news.id, news.title,news.decription,news.content,news.url,news_categories.name FROM news INNER JOIN news_categories on news.news_categories_id = news_categories.id LIMIT $start,$limit";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		//Show tin tức trong phần index
		function GetListNews($category_id,$page,$limit){
			$start = ($page-1)*$limit;
			if ($category_id != ''){
				$sql = "SELECT news.id AS stt,news.title,news.decription,news.content,news.images,news.url,news.news_categories_id,news_categories.id,news_categories.name FROM news INNER JOIN news_categories on news.news_categories_id = news_categories.id WHERE news_categories.id = '$category_id' LIMIT $start,$limit";
			} else {
				$sql = "SELECT news.id AS stt,news.title,news.decription,news.content,news.images,news.url,news.news_categories_id,news_categories.id,news_categories.name FROM news INNER JOIN news_categories on news.news_categories_id = news_categories.id LIMIT $start,$limit ";
			}
			
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		//Delete tin tức trong admin
		function DeleteNews($id){
			$sql = "DELETE FROM news WHERE id = $id";
			return  mysqli_query($this->conn, $sql);
		}
		//Lấy giá trị củ để edit
		function getNewsInfo($id){
			$sql = "SELECT * FROM news WHERE id = '$id' ";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		//Edit giữ liệu mới
		function EditNews($title,$descript,$content,$news_categories_id,$images,$url,$id){
			$sql = "UPDATE news SET title = '$title', decription = '$descript',content ='$content',news_categories_id='$news_categories_id',images='$images',url='$url',edited = now() WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		//Select trong add news
		function getListCategory($news_category_id = null) {
			$sql = "SELECT * FROM news_categories";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['name'];
				$selected = ($id == $news_category_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}
		// lấy id để phân trang
		function getTotalNews(){
			$sql = "SELECT id FROM news";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		// Detail trong index
		function GetDetail($id){
			$sql = "SELECT news.id AS stt,news.created,news.title,news.decription,news.content,news.images,news.url,news.news_categories_id,news_categories.id,news_categories.name FROM news INNER JOIN news_categories on news.news_categories_id = news_categories.id WHERE news.id = '$id' ";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}

	
?>
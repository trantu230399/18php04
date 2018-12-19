<?php 
	class Video {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function InsertVideo($title,$content,$video,$url){
            $sql = "INSERT INTO video (title, content,video, url) VALUES ('$title', '$content', '$video','$url')";
			return mysqli_query($this->conn, $sql);
        }
        function ListVideo($page_video,$limit_video){
			$start = ($page_video-1)*$limit_video;
			$sql = "SELECT * FROM video LIMIT $start,$limit_video" ;
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getTotalVideo(){
			$sql = "SELECT id FROM video";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}	
    }
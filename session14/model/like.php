<?php 
	class Likes{
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function ListLike($news_id){
			$sql = "SELECT *  FROM likes INNER JOIN users ON 
			likes.user_id = users.id WHERE news_id = $news_id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
    }
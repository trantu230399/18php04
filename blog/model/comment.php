<?php
    class Comment{
        public $conn;
        function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function SaveComment($id,$content,$user){
            $sql = "INSERT INTO comments (user, news_id,content) VALUES ('$user','$id','$content')";
            return mysqli_query($this->conn, $sql);
        }
        function ListComment($id,$limit,$page){
			$start = ($page -1)* $limit;
            $sql = "SELECT * FROM comments where news_id = '$id' LIMIT $start,$limit ";
			$result = mysqli_query($this->conn, $sql);
			return $result;
        }
        function checkLogin($username, $password){
			$sql = "SELECT * FROM news_user WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
        }
        function getTotalComment($id){
            $sql = "SELECT content FROM comments WHERE news_id = '$id' ";
            $result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
        }
    }
    ?>
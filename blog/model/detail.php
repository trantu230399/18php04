<?php
    class Detail{
        public $conn;
        function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
        function InsertDetail($name,$location,$content,$images,$url){
            $sql = "INSERT INTO detail (name, location,content,images,url) VALUES ('$name', '$location', '$content','$images','$url')";
            return mysqli_query($this->conn, $sql);
        }
        function ListDetail(){
            $sql = "SELECT * from detail";
            $result = mysqli_query($this->conn, $sql);
			return $result;
        }
    }
    ?>
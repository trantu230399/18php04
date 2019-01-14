<?php 
	class Tournaments {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function InsertLaliga($name,$number,$point,$images){
            $sql = "INSERT INTO laliga(name,number_of_matches,point,images)VALUES('$name','$number','$point','$images')";
            return mysqli_query($this->conn, $sql);
        }
    }
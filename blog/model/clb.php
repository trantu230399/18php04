<?php 
	class CLB {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function ListCLB($id){
            if($id == 1){
                $sql = "SELECT * FROM premier_league ORDER BY point DESC";
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }else{
                $sql = "SELECT * FROM laliga";
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }    
        }
    }
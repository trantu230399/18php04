<?php 
	class CLB {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
        }
        function ListCLB($id){
            switch($id) {
                case '1':
                $sql = "SELECT * FROM premier_league ORDER BY point DESC";
                $result = mysqli_query($this->conn, $sql);
                return $result;
                  break;
                case '2':
                $sql = "SELECT * FROM laliga ORDER BY point DESC";
                $result = mysqli_query($this->conn, $sql);
                return $result;
                  break;
              }
        }
    }
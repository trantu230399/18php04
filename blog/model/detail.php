<?php
    class Detail{
        public $conn;
        function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
        function InsertDetail($name,$location,$content,$images,$url,$number,$tournaments,$team){
            $sql = "INSERT INTO premier_league_player (name, location,content,images,url,number,tournaments_name,premier_league_id) VALUES ('$name', '$location', '$content','$images','$url','$number','$tournaments','$team')";
            return mysqli_query($this->conn, $sql);
        }
        //backend
        function ListDetail(){
            $sql = "SELECT * from premier_league_player";
            $result = mysqli_query($this->conn, $sql);
			return $result;
        }
        //fronted
        function ListPlayers($premier_league_id,$tournaments_name){
            $sql = "SELECT * from premier_league_player where tournaments_name = '$tournaments_name' AND premier_league_id='$premier_league_id' ORDER BY number ASC";
            $result = mysqli_query($this->conn, $sql);
			return $result;
        }
    }
    ?>
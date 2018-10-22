<?php 
class User{
    public $conn;
    function __construct() {
        $connect = new ConnectDB();
        $this->conn = $connect->connect();
    }
    function InsertUser($username,$password,$image){
        $sql = "INSERT INTO user (username,password,avtar) VALUES ('$username','$password','$image')";
        return mysqli_query($this->conn, $sql);
    }
    function getListUser(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
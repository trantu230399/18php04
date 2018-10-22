<?php
class Product{
    public $conn;
    function __construct() {
        $connect = new ConnectDB();
        $this->conn = $connect->connect();
    }
    function InsertProduct($name){
        $sql = "INSERT INTO product (name,image) VALUES ('$name','')";
        return mysqli_query($this->conn, $sql);
    }
    function getListProduct(){
        $sql = "SELECT * FROM product";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
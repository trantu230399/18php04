<?php
class user{
    var $name;
    var $email;
    var $password;
    var $phone;
    var $address;
    private function add(){
        echo "<br/>Register add";
    }
    function edit(){
        echo "<br/>Register edit";
    }
    function register(){
        echo "<br/>Register";
    }
    function login(){
        echo "<br/>Login";
    }
    function view(){
        echo "<br/>view";
    }
    private function list(){
        echo "<br/> list";
    }
}
$user = new user();
$user -> register();
/////////--------
class customer extends user{
    function payment(){
        echo "<br/>payment";
    }
    function history(){
        echo "<br/>history";
    }
}
$customer = new customer();
$customer ->payment();
?>
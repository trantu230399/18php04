<?php
//public cha con xài dc, khong bik thi sai public
//protected cha con xài đc ,ở ngoài không sài đc
//private cha xài đc ,con không xài đc
  class user{
    var $username;
    var $password;
     function register(){
       echo "<br/>Register user";
    }
    public  function edit(){
        echo "<br/>Register edit";
    }
    function delete(){
        echo "<br/>Register delete";
        // $this -> edit();
        $this ->register();
    }
}
// $user = new user();
// $user -> register();
// $user -> edit();
// $user = new user();
// $user -> delete();
class student extends user{
    

}

 $student = new student();
 $student -> register();
 $student -> delete();
// $student -> delete();
?>
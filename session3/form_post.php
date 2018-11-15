<head>
<title>form_post </title>

<style>
.error{
    color : yellow;
}
</style>
</head>
<body>
    <?php
    //var_dump($_POST);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $errName = '';
        $errPassword = '';
        $check = true;
       if($name==''){
          $errName = 'Please input your name!';
          $check = false;
       }
       echo '<br>';
       if($password==''){
        $errPassword = 'Please input your password!';
        $check = false;
       }
       if($check){
           echo 'Register success!';
       }
    }
  
    ?>
    <h1>Register Form</h1>
    <form action="#" method="post" name="RegisterForm">
        <p>Name: <input name="name" type ="text"> <span class = error><?php echo $errName ?></span></p>   
       
        <p>Password:<input name="password" type="password"> <span class = error><?php echo $errPassword ?></span></p>
        <p>Avatar : <input name = "avatar" type="file"></p>
        <input type="submit" name="submit" value="Register">
        
    </form>

</body>
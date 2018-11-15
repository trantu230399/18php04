<html>
    <head>
        <title>Register-Form</title>
    </head>
    <body>
        <?php  
        include 'a.php';    
        if(isset($_POST['submit'])){
            $username = $_POST['name'];
            $password = $_POST['password'];
            $sql="insert into tvat(name,password) values('$username','$password')";
            $conn->query($sql);     
            header('Location:list_user.php');
        } 
        ?>
        <h1>Register-Form</h1>
        <form name="" method="post" action="#" >
            <p >Ho va Ten :<input type="text" name="name" ></p>
            <p>Mat Khau :<input type="password" name="password" ></p>
            <p><input type='submit' name='submit' value='Register'></p>     
        </form>

    </body>
</html>
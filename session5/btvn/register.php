<html>
    <head>
    <title>Rigister-Form</title>
    </head>
    <body>
        <?php
        include 'connec.php';
        $sql = "select * from user";
        if(isset($_POST['submit'])){
            $name = $_POST['name']; 
            $price = $_POST['price']; 
            $description = $_POST['description'];   
            $sql = "insert into user(name,price,description)values('$name','$price','$description')";
            $conn->query($sql);     
            header('Location:list_user.php');
            
        }
            ?>
        <h1>Register-Form</h1>
        <form method="POST" action="#" name="register">
            <p >Ho va Ten :<input type="text" name="name"  ></p>
            <p>price:<input type="text" name="price"></p>
            <p>description :<textarea name="description" ></textarea >
            <p><input type='submit' name='submit' value='Register'></p>     
        </form>
    </body>
</html>
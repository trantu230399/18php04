<html>
    <body>
        <h1>
            Edit
        </h1>
        <a href ="list_user.php">Back</a>;
        <?php
        include 'connec.php';
        $id = $_GET['id'];
        $sql = "select * from user where id =$id";
        $result =  $conn->query($sql); 
        while($row = $result ->fetch_assoc()){
            $name = $row['name'];
            $price = $row['price'];
            $description = $row['description'];
        }
        if(isset($_POST['edit'])){
            $name = $_POST['name']; 
            $price = $_POST['price']; 
            $description = $_POST['description'];   
            $sql = "update user set name='$name',price = '$price',description = '$description' where id ='$id'";
            $conn->query($sql); 
            header('Location:list_user.php');
        }
        
        ?>
        <form method="POST" action="#" name="register">
            <p >Ho va Ten :<input type="text" name="name" value = "<?php echo $name; ?>" ></p>
            <p>price:<input type="text" name="price" value = "<?php echo $price; ?>"></p>
            <p>description :<textarea name="description" value = "<?php echo $description; ?>"></textarea >
            <p><input type='submit' name='edit' value='Register'></p>     
        </form>
   </body>
</html>
<html>
    <body>
        <h1>
            Edit
        </h1>
        <?php
        include 'connec.php';
        $id = $_GET['id'];
        if(isset($_POST['edit'])){
            $name = $_POST['name']; 
            $price = $_POST['price']; 
            $description = $_POST['description'];   
        }
        
        ?>
        <form method="POST" action="#" name="register">
            <p >Ho va Ten :<input type="text" name="name" ></p>
            <p>price:<input type="text" name="price"></p>
            <p>description :<textarea name="description" ></textarea >
            <p><input type='submit' name='edit' value='Register'></p>     
        </form>
   </body>
</html>
<html>
    <body>
        <a href ='register.php'>Back</a>
        <?php
        include 'connec.php';
        $sql = "select * from user";
        $result =  $conn->query($sql); 
        ?>
        <h1>List User</h1>
    <?php
    if($result->num_rows > 0){
        while($row = $result ->fetch_assoc()){
           $id = $row['id'];
            echo  $row['id'].'-'. $row['name'].'-'.$row['price'].'-'.$row['description'];
            echo " <a href='delete.php?id=$id'>DELETE</a>";
            echo '---';
            echo "<a href='edit.php?id=$id'>Edit</a>";
            echo '<br>';
        }
    }
    
    ?>
    </body>
</html>
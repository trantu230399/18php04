<html>
<body>
    <?php
    include 'a.php';
    $sql = "select * from tvat";
    $result =  $conn->query($sql);     
    ?>
    <a href='test.php'>Back</a>
    <h1>List User</h1>
    <?php
    if($result->num_rows > 0){
        while($row = $result ->fetch_assoc()){
           $id = $row['id'];
            echo  $row['id'].'-'. $row['name'].'-'.$row['password'];
            echo "<a href='delete.php'>Delete</a>";
            echo '<br>';
        }
    }
    
    ?>
</body>
</html>
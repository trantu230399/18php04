<html>
    <body>
        <a href ='register.php'>Back</a>
        <form action ="#" method="POST" name="tvat">
        <p>Serch<input name="serch" type="test"><span></span></p>
        <p>Submit<input name ="click" type ="submit"></p>
        </form>
        <?php
       include 'connec.php';
     

        ?>
        <h1>List User</h1>
    <?php
        $sql='';
        $serch =$_POST['serch'];
       if($serch==''){
           $sql ="select * from user";
       }else{
           $sql = "select * from user where name like '%$serch%'";
       }      
    
    $result = $conn->query($sql); 
    if($result->num_rows > 0){
     while($row = $result ->fetch_assoc()){
        $id = $row['id'];
        echo "<br>";
         echo  $row['id'].'-'. $row['name'].'-'.$row['price'].'-'.$row['description'];
         echo " <a href='delete.php?id=$id'>DELETE</a>";
         echo '---';
         echo "<a href='edit.php?id=$id'>Edit</a>";
         echo '<br>';
     }
 }
    ?>
       
    <?php
   
    ?>
    </body>
</html>
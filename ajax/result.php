<?php 
// Connect Database
$conn = @mysqli_connect("localhost", "root", "12345678", "test");
$sql = "select * from member";
$result =  $conn->query($sql); 
?>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
    </tr>
<?php 
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $name = $row['username'];
            $email = $row['email'];
?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $email ; ?></td>
            </tr>
       <?php }
    }?>
    </table>
<?php 
// Connect Database
$conn = @mysqli_connect("localhost", "root", "12345678", "test");
$sql = "select * from member";
$result1 =  $conn->query($sql); 
$result = array();
?>
<?php 
    if($result1->num_rows > 0){
        while($row = $result1->fetch_assoc()){
            $result[] = array(
            'username' => $row['username'],
            'email' => $row['email'],
            );
        }
    }
    echo (json_encode($result));
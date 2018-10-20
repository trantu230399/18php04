
<?php
    $conn = @mysqli_connect("localhost", "root", "", "at");
    $id = $_GET['id'];
    $sql = "delete from session6 where id = '$id'";
$conn->query($sql);

?>
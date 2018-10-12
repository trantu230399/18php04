
<?php
    $conn = @mysqli_connect("localhost", "root", "", "session6");
    $id = $_GET['id'];
    $sql = "delete from session6 where id = '$id'";
$conn->query($sql);

?>
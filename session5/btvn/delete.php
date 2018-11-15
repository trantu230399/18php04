<body>
<h1>Delete</h1>
<?php
include 'connec.php';
$id = $_GET['id'];
$sql = "delete from user where id = '$id'";
$conn->query($sql);
header('Location:list_user.php');
?>
</body>
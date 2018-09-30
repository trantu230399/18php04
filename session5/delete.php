<body>
    <h1>Delete</h1>
    <?php
    include 'a.php';
    $id = $_GET['id'];
    echo $id ;  
    $sql = "delete from tvat where id = '$id'";
    $conn->query($sql);     
    header('Location:list_user.php');
    ?>
</body>
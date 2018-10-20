<?php
    $conn = @mysqli_connect("localhost", "root", "", "18php04_shop");
?>
<?php
$sql = "select * from products";
$conn->query($sql);    
$result =  $conn->query($sql);  
$id = $_GET['id'];
?>
<?php
if($row = $result ->fetch_assoc()){
    $img = $row['url'];
?>
<h1><?php echo $row['name'];?></h1>
<p><?php echo $row['description']; ?></p>
<img src ='<?php echo $img;?>'>
<p><b>Giá Tiền:</b><?php echo $row['price'] ;?>đ</p>
<input type="submit" name ="mua" value="Buy">
<?php } ?>
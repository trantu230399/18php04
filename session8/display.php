<style>
.tvat{
    text-align:center;
}
.btn-danger{
color:#fff;
background-color : #269abc;
border:2px solid #1b6d85;
}
.btn-info{
color:#fff;
background-color : #d9534f;
border:2px solid #d43f3a;
}
</style>
<?php
	$conn = @mysqli_connect("localhost", "root", "", "18php04_shop");

?> 
<?php
    $id = $_GET['id'];
	// Lấy ra nội dung bài viết theo điều kiện id
    $sql = "select * from products where id = $id";
    $result =  $conn->query($sql);     
    ?>
    <div class="tvat">
    <?php
    // Thực hiện truy vấn data thông qua hàm mysqli_query
    if($row = $result ->fetch_assoc()){
        $name=$row['name'];
        $img = $row['image'];
        $price = $row['price'];
        $description =$row['description'];
        echo "<h1 class='name'>$name</h1>";
        echo "<p><img src=dist/img/$img class='img'>/<p>"."<br/>"; 
        echo "<p><b>Mô Tả:$description</b></p>";
        echo "Price:".$price;
    }
?>
       <div class="product-info smart-form">
			<div class="row">
			    <div class="col-md-12"> 
                    <a href="#" class="btn btn-danger">Add to cart</a>
                    <a href="#" class="btn btn-info">Detail</a>
				</div>
			</div>
		</div>
  <div>
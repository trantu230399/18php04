<?php
    $conn = @mysqli_connect("localhost", "root", "", "18php04_shop");
?>
<?php
$sql = "select * from products";
$conn->query($sql);    
$result =  $conn->query($sql);  
?>
	<div class="innertube">
				<table width="100%" border="1">
                <tr>
                <?php
                $i = 0;
                while($row = $result ->fetch_assoc()){
                    $img =$row['url'];
                    $id = $row ['id'];
                    if($i==0){
                        
                        echo "</tr>";
                    }
                ?>
					<td>
                    <b><?php echo $row['name'];  ?></b>
                    <p><?php echo $row['description']; ?></p>
                    <?php echo "<img src='$img'>"; ?>
                    <a href="display.php?id=<?php echo $id; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
                    </td>                  
                  <?php 
                  $i++;
              }
          ?>
				</table>	
			</div>
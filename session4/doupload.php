<html>
<head>

<script type='text/javascript' src='jquery.min.js'></script>
<script type="text/javascript" src='common.js'></script>

</head>
<body>
<?php
if(isset($_POST['ok_upload']))
{
 $num=$_POST['file'];
 echo "<h3>Chúc Bạn Đã Thành Công!!!</h3>";
    $conn = @mysqli_connect("localhost", "root", "", "test");
 for($i=0; $i< $num; $i++)
 {
  move_uploaded_file($_FILES['img']['tmp_name'][$i],"data/".$_FILES['img']['name'][$i]);
  $url="data/".$_FILES['img']['name'][$i];
  $name=$_FILES['img']['name'][$i];

  $sql="insert into images(img_url,img_name) values('$url','$name')";
  $conn->query($sql);
  echo "Upload Thanh cong file <b>$name</b><br />";
  echo "<img src='$url' id='img'/><br />";
  echo "Images URL: <input type='text' name='link' value='$url' size='35' /><br />";
  
 }
 echo "<input type='submit' name='button' class='click' value='click'>" ;
}
else
{
 echo "Vui long chon hinh truoc khi truy cap vao trang nay";
}
?>

</body>
</html>
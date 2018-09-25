<?php
// Ấn định  dung lượng file ảnh upload
//define khai báo hàm hằng 
define ("MAX_SIZE","100");
// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
function getExtension($str) {
//strrpos trả về vị trí cuối cùng xuất hiện    
$i = strrpos($str,".");
if (!$i) { return ""; }
//strlen lấy chiều dài của chuỗi bao gồm khoảng trắng
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
//This variable is used as a flag. The value is initialized with 0 (meaning no
// error  found)
//and it will be changed to 1 if an errro occures.
//If the error occures the file will not be uploaded.
$errors=0;
//checks if the form has been submitted
if(isset($_POST['submit']))
{
// lấy tên file upload
$image=$_FILES['image']['name'];
// Nếu nó không rỗng
if ($image)
{
// Lấy tên gốc của file
//stripslashes loại bỏ cái dấu (\), (\\) => (\)
$filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
$extension = getExtension($filename);
$extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
"png") && ($extension != "gif"))
{
// xuất lỗi ra màn hình
echo '<h1>Đây không phải là file hình!</h1>';
$errors=1;
}
else
{
//Lấy dung lượng của file upload
$size=filesize($_FILES['image']['tmp_name']);
if ($size > MAX_SIZE*1024)
{
echo '<h1>Vượt quá dung lượng cho phép!</h1>';
$errors=1;
}
// đặt tên mới cho file hình up lên
$image_name=time().'.'.$extension;
// gán thêm cho file này đường dẫn
$newname="images/".$image_name;
// kiểm tra xem file hình này đã upload lên trước đó chưa
$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied)
{
echo '<h1> File hình này đã tồn tại </h1>';
$errors=1;
}}}}
function showImage($image) {
    return "<img src ='$image' alt=''>";
}
if(isset($_POST['submit']) && !$errors)
{
$check = true;
showImage($newname);
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $errName = '';
    $password = $_POST['password'];
    $errPass = '';
    $email = $_POST['email'];
    $errEmail = '';
    $nhaplai = $_POST['nhaplai'];
    $errorNhaplai = '';
    $gender = $_POST['gender'];
    $errGender = '';
    $city = $_POST['city'];
    $errCity = '';
    $mota = $_POST['mota'];
    $check = true;
    
    if($name ==''){
        $errName = 'Please input your name';
        $check = false;
    }
    if($email == ''){
        $errEmail = 'Please input your email';
        $check = false;
    }
    if($password == ''){
        $errPass = 'Please input your password';
        $check = false;
    }
    if($nhaplai != $password ){
        $errorNhaplai = 'please dien lai mk';
        $check = false;
    }
    if($gender==''){
        $errGender = 'please input your gender';
        $check = false;
    }else{
        if($gender=='male'){
            $checkMale="checked";
        }
        if($gender=='female'){
            $checkFemale="checked";
        }
        if($gender=='Other'){
            $checkOther="checked";
        }
    }
    if($city==''){
        $errCity = 'vui long dien vao City';
        $check = false;
    }else{
        if($city== 'dn'){
            $checkDn = "selected";
        }
        if($city== 'hn'){
            $checkHn = "selected";
        }
        if($city== 'hp'){
            $checkHp = "selected";
        }
        if($city== 'hcm'){
            $checkHcm = "selected";
        }
    }
    if($motao == ''){
        $check = false;
    }
    if($check = true){
        echo 'Bạn Đã Đăng Kí Thành Công';
        echo '<br>';
        echo 'Tên:'.$name;
        echo '<br>';
        echo 'Mật Khẩu:'.$password;
        echo '<br>';
        echo 'Email:' .$email;
        echo '<br>';
        echo 'Gender:'.$gender;
        echo '<br>';
        echo 'Quê Quán :'.$city;
        echo '<br>';
        echo 'Mô Tả :'.$mota;
        echo '<br>';
        echo 'Aavatar:'. showImage($newname);
    }
}
?>
<form name="newad" method="post" action="" enctype="multipart/form-data">
<table>
<p>Ho va Ten :<input type="text" name="name" value='<?php echo $name; ?>'><span class="error" ><?php echo   $errName  ?></span></p>
        <p>Email :<input type="text" name="email" value='<?php echo $email; ?>'><span class="error"><?php echo $errEmail ?></span></p>
        <p>Mat Khau :<input type="password" name="password" value='<?php echo $password; ?>'><span class="error"><?php echo  $errPass ?></span></p>
        <p>Nhap Lai Mat Khau :<input type="password" name="nhaplai" ><span class="error"><?php echo $errorNhaplai  ?></span></p>
        <p>Gioi Tinh :
            <input type="radio" name="gender" value="male" <?php echo $checkMale;?>> Male<br>
            <input type="radio" name="gender" value="female" <?php echo $checkFemale;?>> Female<br>
            <input type="radio" name="gender" value="other"<?php echo $checkOther;?>> Other<br>
        <span class="error"><?php echo $errGender  ?></span></p>
        <p>Que Quan :
        <select name='city'>
            <option value="Tp">City</option>
            <option value="dn" <?php echo $checkDn; ?>>Da Nang</option>
            <option value="hcm"<?php echo $checkHcm; ?>>Ho Chi Minh</option>
            <option value="hn"<?php echo $checkHn ; ?>>Ha Noi</option>
            <option value="hp"<?php echo $checkHp ; ?>>Hai Phong</option>
        </select>
        <span class="error"><?php echo $errCity  ?></span></p>
        <p>Thong Tin mo ta ban than :<textarea name="mota" ></textarea >
        <span class="error"></span></p>
<tr><td> <input type="file" name="image"></td></tr>
<tr><td><input name="submit" type="submit" value="Upload image">
</td></tr>
</table>
</form>
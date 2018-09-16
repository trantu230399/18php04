<html>
    <head>
        <title>Form_DangKi</title>
        <style>
        .error{
            color : yellow;
        }
        </style>
    </head>
    <body>
        <?php     
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
            $quequan = $_POST['quequan'];
            $errQuequan = '';
            $mota = $_POST['mota'];
            $avatar = $_POST['avatar'];
            $errAvatar = '';
            $check = true;
            if($name==''){
                $errName = 'Please input your name';
                $check = false;
            }
            if($password==''){
                $errPass = 'please input your password';
            }
            if($nhaplai != $password){
                $errorNhaplai = 'vui long dien lai mk';
                $check = false;
            }
            if($email ==''){
                $errEmail = 'please input your email';
                $check = false;
            }
            if($gender==''){
               $errGender = 'please input your gender';
               $check = false;
            }
            if($quequan==''){
                $errQuequan = 'vui long dien vao que quan';
                $check = false;
            }
            if($mota==''){
                $check = false;
            }
            if($avatar==''){
                $errAvatar = 'please input your avatar';
                $check = false;
            }
            if($check){
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
                echo 'Quê Quán :'.$quequan;
                echo '<br>';
                echo 'Mô Tả :'.$mota;
                echo '<br>';
                echo 'Avatar:'.$avatar;
            }
         }
        ?>
        <h1>Register Form</h1>
        <form method="POST" action="#" name="RegisterForm">
        <p>Ho va Ten :<input type="text" name="name"><span class="error"><?php echo   $errName  ?></span></p>
        <p>Email :<input type="text" name="email"><span class="error"></span><?php echo $errEmail ?></p>
        <p>Mat Khau :<input type="password" name="password"><span class="error"><?php echo  $errPass ?></span></p>
        <p>Nhap Lai Mat Khau :<input type="password" name="nhaplai"><span class="error"><?php echo $errorNhaplai  ?></span></p>
        <p>Gioi Tinh :
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>
        <span class="error"><?php echo $errGender  ?></span></p>
        <p>Que Quan :
        <select name='quequan'>
            <option value="dn">Da Nang</option>
            <option value="hcm">Ho Chi Minh</option>
            <option value="hn">Ha Noi</option>
            <option value="hp">Hai Phong</option>
        </select>
        <span class="error"><?php echo $errQuequan  ?></span></p>
        <p>Thong Tin mo ta ban than :<textarea name="mota" ></textarea >
        <span class="error"></span></p>
        <p>Avatar :<input type="file" name="avatar">
        <span class="error"><?php echo $errAvatar ?></span></p>
        <input type="submit" name="submit" value="Register">
        </form>
    </body>
</html>
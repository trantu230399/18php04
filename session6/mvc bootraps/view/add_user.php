<?php
include 'text.php';
?>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" name="" method="post" action="#" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name='email'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name='add'>ADD USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <?php
      if(isset($_POST['add'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="insert into session6(email,password) values('$email','$password')";
        $conn->query($sql);     
       
     } 
      ?>
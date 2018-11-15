<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" >Đăng Kí Thông Tin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="index.php?action=dangki" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="dangki">ADD USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
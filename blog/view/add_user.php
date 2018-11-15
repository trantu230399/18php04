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
            <form action='admin.php?add_user' role="form"  enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">UserName</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter UserName" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Role</label>
                  <select  class="form-control" id="exampleInputRole" name="role" >
                    <option value='admin'>Admin</option>
                    <option value='customer'>Customer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputImages">Images</label>
                  <input type="file" class="form-control" id="exampleInputImages" placeholder="Password" name="images">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_user">ADD USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
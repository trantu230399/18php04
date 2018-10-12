<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name ="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name ="price">
                </div>
                < <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input type="file" class="form-control" id="exampleInputPassword1" name ="images">
                </div> -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea  class="form-control" id="exampleInputPassword1" placeholder="Enter description" name="description"></textarea> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_product">ADD PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
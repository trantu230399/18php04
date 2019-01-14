<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>LaLiGa</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=laliga" method="post" enctype='multipart/form-data'>
              <div class="box-body">
              <!-- name -->
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
                </div>
                <!-- number -->
                <div class="form-group">
                  <label for="exampleInputNumber">Number Of Matches</label>
                  <input type="text" class="form-control" id="exampleInputNumber" placeholder="Enter Number" name="number">
                </div>
                <!-- point -->
                <div class="form-group">
                  <label for="exampleInputPoint">Point</label>
                  <input type="text" class="form-control" id="exampleInputPoint" placeholder=" enter Point" name="point">
                </div>
                <!-- images -->
                <div class="form-group">
                  <label for="exampleInputImages">Images</label>
                  <input type="file" class="form-control" id="exampleInputImages" placeholder="" name="images">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="laliga">LaLiGa</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
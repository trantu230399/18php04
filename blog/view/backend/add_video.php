<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_video" method="post" enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputTitle">Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputContent">Content</label>
                  <input type="text" class="form-control" id="exampleInputContent" placeholder="Enter Content" name="content">
                </div>
                <div class="form-group">
                  <label for="exampleInputVideo">Videos</label>
                  <input type="file" class="form-control" id="exampleInputVideos" placeholder="" name="videos">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_video">ADD VIDEO</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
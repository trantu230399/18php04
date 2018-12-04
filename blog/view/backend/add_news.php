<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add News</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_news" method="post" enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descript</label>
                  <input type="text" class="form-control" id="exampleInputDescript" placeholder="descript" name="descript">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Content</label>
                  <textarea name="content" id="" cols="30" rows="10" class="form-control" id="exampleInputContent"></textarea> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Images</label>
                  <input type="file" class="form-control" id="exampleInputImages" placeholder="descript" name="images">
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Nation</label>
                  <select  class="form-control" id="exampleInputRole" name="nation" >
                    <?php echo $category;?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_news">ADD NEWS</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
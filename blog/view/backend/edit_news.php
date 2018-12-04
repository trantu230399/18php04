<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit News</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=edit_news&id=<?php echo $id; ?>" method="post" enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title" value="<?php echo $titleEdit; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descript</label>
                  <input type="text" class="form-control" id="exampleInputDescript" placeholder="descript" name="descript"  value="<?php echo $descriptEdit; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Content</label>
                  <textarea name="content" id="" cols="30" rows="10" class="form-control" id="exampleInputContent"  value=""><?php echo $contentEdit; ?></textarea> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Images</label>
                  <span><img src ="images/<?php echo $imagesEdit ?>"></span>
                  <input type="file" class="form-control" id="exampleInputImages" placeholder="descript" name="images">
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Nation</label>
                  <select  class="form-control" id="exampleInputRole" name="nation"  >
                    <?php echo $category; ?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_news">EDIT NEWS</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
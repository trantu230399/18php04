<style>
  .videos{
    height:200px;
    width:auto;
  }
</style>
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List Videos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" width ="100%">
                <tr>
                  <th >ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Videos</th>
                </tr>
                <?php while($row=$ListVideo->fetch_assoc()){
                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $url = $row['url'];
                  ?>
                <tr>
                  <th><?php echo $id;?></th>
                  <th><?php echo $title;?></th>
                  <th><?php echo $content;?></th>
                  <th>  
                    <video controls  class="videos"><source src="<?php echo $url;?>" type="video/mp4"></video>
                  </th>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>     
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     
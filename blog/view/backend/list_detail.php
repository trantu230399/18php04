<div class="row" >
        <div class="col-md-6">
          <div class="box" >
            <div class="box-header with-border">
              <h3 class="box-title">List News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"  >
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Id</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th >Content</th>
                  <th >Images</th>
                </tr>
                <tr>
                    <?php
                    while($row=$ListDetail->fetch_assoc()){
                          $id       = $row['id'];
                          $name     = $row['name'];
                          $location = $row['location'];
                          $content  = $row['content'];
                          $url      = $row['url'];  
                    ?>
                    <th><?php echo $id; ?></th>
                    <th><?php echo $name; ?></th>
                    <th><?php echo $location; ?></th> 
                    <th><?php echo $content; ?>  </th>
                    <th><img src="<?php echo $url;?>"></th>
                </tr>
                <?php
                }
                    ?>
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
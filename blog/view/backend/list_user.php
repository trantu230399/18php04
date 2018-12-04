<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" width ="100%">
                <tr>
                  <th >ID</th>
                  <th>Name</th>
                  <th>UserName</th>
                  <th>Images</th>
                </tr>
                <?php while ($row = $listUser->fetch_assoc()) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $url = $row['url'];
                  $username = $row['username'];    
                ?>
                <tr>
                  <th><?php echo $id;?></th>
                  <th><?php echo $name;?></th>
                  <th><?php echo $username;?></th>
                  <th><?php echo "<img src ='$url'>" ?>
                </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <?php for ($i = 1; $i <= $numberPage; $i++) {?>
                  <li>
                    <a href="admin.php?action=list_user&page=<?php echo $i?>"> <?php echo $i?> </a>
                  </li>
               <?php }?>              
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     
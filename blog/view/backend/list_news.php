<style type="text/css">

  img{
    height: 200px;
  }
  .id{
    color : red;
  }
  .row{
    width : 120%;
  }
  
  </style>
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
                  <th>Title</th>
                  <th>Decription</th>
                  <th >Content</th>
                  <th >Images</th>
                  <th >Nation</th>
                  <th>Label</th>
                </tr>
                 <?php while ($row = $listNews->fetch_assoc()) { 
                    $id = $row['id'];
                    $title = $row['title'];
                    $decription = $row['decription'];
                    $content = $row['content'];
                    $url = $row['url'];
                    $nation = $row['name'];
                  ?>
                <tr>
                  <th><?php echo $id;?>
                  <th><?php echo $title;?>
                  <th><?php echo substr($decription,0,50);?>
                  <th><?php echo substr($content,0,50);?>
                  <th><?php echo "<img src ='$url'>"?>
                  <th><?php echo $nation;?>
                  <th>
                    <a href="admin.php?action=edit_news&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a>
                    <a href="admin.php?action=delete_news&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                  </th>
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
                    <a href="admin.php?action=list_news&page=<?php echo $i?>"> <?php echo $i?> </a>
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
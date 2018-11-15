<style>
.image{
  width :150px;
}
th,td{
  text-align : center;
}
</style>
<div class="row" style="width: 150%">
        <div class="col-md-6" >
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Id</th>
                  <th>Name Product</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <?php while ($row = $listProduct->fetch_assoc()) {
                    $id = $row['id'];
                    $image = $row['url'];
                  ?>
                  <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo "<img src ='$image' class = 'image'>" ;?></td>
                    <td>
                    <a href="index.php?action=edit_product&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="index.php?action=delete_product&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                    <!-- <td></td> -->
                  </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     
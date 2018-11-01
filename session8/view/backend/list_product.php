<style type="text/css">

  img{
    height: 200px;
  }
  .id{
    color : red;
  }
  .row{
    width : 200%;
  }
  .name{
    font-size : 20px;
    color : green;
  }
</style>
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th style="width: 40px">Options</th>
                </tr>
                <?php while ($row = $listProduct->fetch_assoc()) {
                    $id    = $row['id'];
                    $image = $row['image'];
                  ?>
                  <tr>
                    <td class ='id'><?php echo $row['id']?></td>
                    <td class ="name"><?php echo $row['name']?></td>
                    <td class ="name"><?php echo $row['price']?></td>
                    <td class ="name"><?php echo $row['category_name']?></td>
                    <td class ="name"><img src="dist/img/<?php echo $image;?>"></td>
                    <td>
                    <a href="admin.php?action=edit_product&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_product&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>
              Paging: 
              <?php for ($i = 1; $i <= $numberPages; $i++) {?>
                <a href="admin.php?action=list_product&page=<?php echo $i?>"> <?php echo $i?> </a>
              <?php }?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     
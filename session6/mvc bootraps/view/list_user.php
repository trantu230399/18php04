<?php
include 'text.php';
$sql = "select * from session6";
$result =  $conn->query($sql);   
?>
<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Emailk</th>
                  <th>Passworld</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <?php
if($result->num_rows > 0){
  while($row = $result ->fetch_assoc()){
     $id = $row['id'];
     $email = $row['email'];
     $password = $row['password'];
     echo '<tr>'.'<td>'.$id.'</td>'.'<td>'.$email.'</td>'.'<td>'.$password.'</td>'.'<td>'."<a href = 'view/edit_user.php?id=$id'>".'<button type="button" class="btn btn-block btn-info">'.'Edit'.'</button>'.'</a>'.'</td>'.'<td>'."<a href='view/delete_user.php?id=$id'>".'<button  type="button" class="btn btn-block btn-danger">'.'DELETE'.'</button>'.'</a>'.'</td>'.'</tr>';
  }
}

?>
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
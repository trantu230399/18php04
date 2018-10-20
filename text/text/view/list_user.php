<?php
include 'text.php';
$sql = "select * from at";
$result =  $conn->query($sql);  
?>
<div class="row" style="width: 120%">
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
                  <th>Email</th>
                  <th>Name</th>
                  <th >Note</th>
                  <th >Passworld</th>
                  <th style="width: 100px">Label</th>
                  <?php
if($result->num_rows > 0){
  while($row = $result ->fetch_assoc()){
     $id = $row['id'];
     $name = $row['name'];
     $note = $row['note'];
     $email = $row['email'];
     $password = $row['password'];
     echo '<tr>'.'<td>'.$id.'</td>'.'<td>'.$email.'</td>'.'<td>'.$name.'</td>'.'<td>'.$note.'</td>'.'<td>'.$password.'</td>'.'<td>'."<a href = 'view/edit_user.php?id=$id'>".'<button type="button" class="btn btn-block btn-info">'.'Edit'.'</button>'.'</a>'."<a href = 'view/delete_user.php?id=$id'>".'<button type="button" class="btn btn-block btn-danger">'.'DELETE'.'</button>'.'</a>'.'</td>'.'</tr>';
  }
}

?>
                </tr>
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

 
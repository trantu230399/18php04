<style>
    #exampleInputRole{
        width:100px;
    }
</style>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Thông Tin Cầu Thủ</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_detail" method="post" enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Location</label>
                  <select  class="form-control" id="exampleInputRole" name="location" >
                    <option>--- --- ---</option>
                    <option value='fw'>FW</option>
                    <option value='mf'>MF</option>
                    <option value='df'>DF</option>
                    <option value='gk'>GK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputImages">Images</label>
                  <input type="file" class="form-control" id="exampleInputImages" placeholder="" name="images">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Content</label>
                  <textarea name="content" id="" cols="30" rows="10" class="form-control" id="exampleInputContent"></textarea> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_detail">ADD DETAIL</button>
              </div>
            </form>
          </div>
        </div>
      </div>
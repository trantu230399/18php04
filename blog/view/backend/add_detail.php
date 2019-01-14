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
                  <label for="exampleInputNumber">Number Shirt</label>
                  <input type="text" class="form-control" id="exampleInputNumber" placeholder="Enter Number" name="number">
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Location</label>
                  <select  class="form-control" id="exampleInputRole" name="location" >
                    <option>--- --- ---</option>
                    <option value='FW'>FW</option>
                    <option value='MF'>MF</option>
                    <option value='DF'>DF</option>
                    <option value='GK'>GK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Tournaments</label>
                  <select  class="form-control" id="exampleInputTournaments" name="tournaments" >
                    <option>--- --- ---</option>
                    <option value='1'>Premier League</option>
                    <option value='2'>Bundesliga</option>
                    <option value='3'>Laliga</option>
                    <option value='4'>Seria</option>
                    <option value='5'>V-League</option>
                    <option value='6'>League-1</option>
                    <option value='7'>Champion League</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputRole">Teams</label>
                  <select  class="form-control" id="exampleInputTeam" name="team" >
                    <option>--- --- ---</option>
                    <option value='1'>Liverpool</option>
                    <option value='2'>Man City</option>
                    <option value='3'>Tottenham</option>
                    <option value='4'>Chelsea</option>
                    <option value='5'>Arsenal</option>
                    <option value='6'>Man UTD</option>
                    <option value='7'>Wolves</option>
                    <option value='8'>Everton</option>
                    <option value='9'>West Ham</option>
                    <option value='10'>Waltford</option>
                    <option value='11'>Bourmemouth</option>
                    <option value='12'>Leicester</option>
                    <option value='13'>Brighton</option>
                    <option value='14'>Newcastle</option>
                    <option value='15'>Crystal Place</option>
                    <option value='16'>Cardiff</option>
                    <option value='17'>Southampton</option>
                    <option value='18'>Burnley</option>
                    <option value='19'>Huddersfield</option>
                    <option value='20'>Fulham</option>
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
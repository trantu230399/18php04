<h1 class="box-title" >Giỏ Hàng</h1>
<?php
    while($row = $listDetail ->fetch_assoc()){
       $id = $row['id'];
       $image =$row['image'];
?>
    <div class="type">
        <div class="rowtop">
            <h1><?php echo $row['name'];?>
        </div>
        <div class="ratingresult">
            <span class="star"><i class="icontgdd-star"></i></span>
            <span class="star"><i class="icontgdd-star"></i></span>
            <span class="star"><i class="icontgdd-star"></i></span>
            <span class="star"><i class="icontgdd-star"></i></span>
            <span class="star"><i class="icontgdd-hstar"></i></span>                                
        </div>
        <div class = "rowdetail">
            <img src = "dist/img/<?php echo $image; ?>" class ="image" >
        </div>
        <div class ="area_price">
           Price: <strong class="price"><?php echo $row['price'];?>đ</strong>
        </div>
    </div>
       <?php }
?>
<div class="row">
            <form role="form" action="" method="post">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add" id='click' >ADD </button>
              </div>
            </form>
</div>
<script>
$( document ).ready(function(){
    $('#click').click(function(){
      alert('tvat1');
  })
})
 
</script>
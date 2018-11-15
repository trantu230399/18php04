<style>
h1{
    overflow: hidden;
    font-size: 24px;
    color: #333;
    line-height: 40px;
}
.image{
    display: block;
    height: auto;
    margin: auto;
    cursor: pointer;
    max-width: 100%;
    float: left;
}
.price{
    margin-left :200px;
    color: #e10c00;
    font-size: 24px;             
}
</style>
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
            <strong class="price"><?php echo $row['price'];?>đ</strong>
        </div>
    </div>
       <?php }
?>


 
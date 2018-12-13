<style>
.cap h4{
    color:red;
    font-size:25px;
}
   .newsref {
    border-left: solid 2px #eee;
    float:right;
    margin-top:120px;
    margin-right:180px;
    width:250px;
}
.lst a {
    color: #222;
    outline: none;
    font-size: 20px;
    text-decoration: none;
}
</style>
<div class='newsref'>
    <div class='cap'>
        <h4>Cùng Chuyên mục</h4>
    </div>
        <?php while($row=$ListRelate->fetch_assoc()){ 
                $id = $row['id'];
                $title = $row['title']
        ?>
    <ul class="lst">
        <li class="fst"><a href="index.php?action=news_detail&id=<?php echo $id;?>"><?php echo $title;?></a></li>
    </ul>
        <?php
        } ?>
</div>
<div class="grlf" id="NewsDisplayZone">
<?php 
while ($row =$listDetail->fetch_assoc()){
    $stt=$row['stt'];
    $id = $row['id'];
    $title=$row['title'];
    $decription=$row['decription'];
    $content=$row['content'];
    $url=$row['url'];
    $created=$row['created'];
    $name = $row['name'];
    $news_categories_id = $row['news_categories_id'];
    ?>
    <div class="breakcrum lft">
        <a href="index.php?action=home&category_id='<?php echo $id?>'"><b><?php echo $name;?></b></a>
    </div>   
    <div class="ncont">
        <h1 class="tit"><?php echo $title;?></h1>
    </div>
    <div class="auth">
        <div class="period"><?php echo $created?></div>
    </div>
    <div class="mda-ref"></div>
    <div class="content">
        <div>
            <?php echo $decription;?>
        <div>
        <div class="thumins">
            <span class="show_gal item0">
                <img src="<?php echo $url?>" class="images">
            <span>
        </div>
        <div><?php echo $row['content'];?></div>
    </div>    
<?php   
}
?>
<div id="news_comment">
    <div class="comment">
            <form action="index.php?action=news_comment&id=<?php echo $stt;?>" method='post'>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Phần Comment</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" id="exampleInputContent"></textarea> 
                    </div>			
                    <input type="submit" name="comment" value="Comment" class="button_comment">
            </form>
            <h1>Nội Dung Bình Luận</h1>
        </div>
    <?php while ($row = $listComment->fetch_assoc()) {
            $content = $row['content'];
        ?>
        <div class="list_comment">
            <div class="user_comment_info">
                <p><b><?php echo $row['user'];?></b></p>
                <img src="images/dang-nhap/user1.png" alt="user" title = "user1">
            </div>
            <div class="content_comment">
                <?php echo  $content;?>
            </div>
        </div>
        <?php }
        ?> 
        <!-- phan trang cho comment -->
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <?php for ($i = 1; $i <= $numberPage; $i++) {?>
                  <li>
                    <a href="index.php?action=news_detail&id=<?php echo $stt;?>&page=<?php echo $i?>"> <?php echo $i?> </a>
                  </li>
               <?php }?>              
                <li><a href="#">&raquo;</a></li>
              </ul>
        </div>         
</div>        
</div> 


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
</div>
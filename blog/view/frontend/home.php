
<div class="news_list">
<div class="col260 fl" data-vr-zone="Homepage_Tin nóng">
<div class="head_news"><a href="#" onclick="return false">Tin nóng</a></div>
<?php 
if(count($listNews)){
	while ($row = $listNews->fetch_assoc()) {
	    $id = $row['stt'];
		  $url = $row['url'];
		  $title =  $row['title'];
			$decription = $row['decription'];
			$content = $row['content'];
		  
?>
	<ul class="list_news_hot">
		<div id="scroll_news_hot">
			<li><h2 class="list_title"><a class='f14' href='index.php?action=news_detail&id=<?php echo $id; ?>'><?php echo $title."</br>";?></a></h2></li>
			<p class="decription"><img src = "<?php echo $url;?>" class="imagess"><?php echo substr($decription,0,200).".........................";?></p>
		</div>	
	</ul>	
<?php }
}
?>
</div>
<div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <?php for ($i = 1; $i <= $numberPage; $i++) {?>
                  <li>
                    <a href="index.php?action=home&page=<?php echo $i?>"> <?php echo $i?> </a>
                  </li>
               <?php }?>              
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
</div>
